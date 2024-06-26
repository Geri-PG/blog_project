<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required',
        ]);

        $user = Auth::user();

        Posts::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'picture' => $request->picture,
            'published_at' => Carbon::now(),
            'slug' => Auth::user()->name,
        ]);

        return redirect()->route('blog.all');
    }

    public function allBlogs()
    {
        $blogs = Posts::paginate(4);

        return view('allBlogs', compact('blogs'));
    }

    public function deleteBlog(Posts $blog)
    {

        $blog->delete();

        return redirect()->route('blog.all');
    }

    public function editBlog(Posts $blog)
    {
        return view('edit', compact('blog'));
    }

    public function saveBlog(Request $request, Posts $blog)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
        ]);


        $blog->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
        ]);

        return redirect()->route('blog.all');
    }

    public function show(Posts $blog)
    {
        return view('show', compact('blog'));
    }
}
