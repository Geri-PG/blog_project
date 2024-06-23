<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;


class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $blogId = $request->route('blog');
        $blog = Posts::find($blogId);


        if(Auth::check() && $blog && $blog->id === Auth::id()) {
            return $next($request);
        }

        return redirect()->back()->with('error', 'You do not have permission to modify this post.');

    }
}
