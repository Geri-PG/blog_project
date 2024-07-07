<?php

namespace App\Http\Middleware;


use Closure;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $blog = $request->route('blog');


        // if (!$blog instanceof Posts) {
        //     $blog = Posts::find($blog);
        // }

        if (Auth::check() && $blog && ($blog->user_id === Auth::id() || Auth::user()->role === 'superAdmin')) {
            return $next($request);
        }

        return redirect()->back()->with('error', 'You can do something only with your blog');
    }
}
