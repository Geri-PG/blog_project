<?php

namespace App\Http\Middleware;


use App\Models\Posts;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $postId = $request->route('blog');
        $post = Posts::find($postId);
        //dd($post);

        if (!$post) {
            return redirect()->back()->with('error', 'Post not found');
        }


        if (Auth::check() && $post->user_id === Auth::id()) {
            return $next($request);
        }

        return redirect()->back()->with('error', 'You can do something only with your blog');
    }
}
