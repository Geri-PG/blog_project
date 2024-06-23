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
        if($user === null) {
            return redirect()->back()->with(['error' => 'Please login, if you want to continue!']);
       }

        Posts::create([
            'user_id' => Auth::user()->id,
            'title' => $request->get('title'),
            'short_description' => $request->get('short_description'),
            'content' => $request->get('content'),
            'picture' => $request->get('picture'),
            'published_at' => Carbon::now(),
            'slug' => Auth::user()->name,
        ]);

        return redirect()->back();
    }

    public function allBlogs()
    {
        $blogs = Posts::paginate(4);


        return view('allBlogs', compact('blogs'));
    }

    // public function userBlog($slug)
    // {
    //     $slug = Posts::where('slug', $slug)->first();
    //    // dd($blog);
    //     return view('userBlog', compact('slug'));
    // }

    public function deleteBlog(Posts $blog)
    {
        $blog->delete();

        return redirect()->back();
    }

    public function editBlog(Posts $blog)
    {
        return view('edit', compact('blog'));
    }

    public function saveBlog (Request $request, Posts $blog)
    {
        $blog->title = $request->get('title');
        $blog->short_description = $request->get('short_description');


        $blog->save();

        return redirect()->back();
    }

    // app/Http/Controllers/BlogController.php
public function show(Posts $blog)
{
    return view('show', compact('blog'));
}

}
