<?php

namespace App\Http\Controllers;

use App\Models\Posts;
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

        Posts::create([
            'user_id' => Auth::user()->id,
            'title' => $request->get('title'),
            'short_description' => $request->get('short_description'),
            'content' => $request->get('content'),
            'picture' => $request->get('picture'),
            'published_at' => $request->get('published_at'),
            'slug' => Auth::user()->name,
        ]);

        return redirect()->back();
    }

    public function allBlogs()
    {
        $blogs = Posts::paginate(4);


        return view('allBlogs', compact('blogs'));
    }
}
