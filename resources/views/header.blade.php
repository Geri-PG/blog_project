<?php
use Illuminate\Support\Facades\Auth;
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Awesome Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/blog">Create Blog</a>
                    </li>
                    @if (Auth::user()->role === 'superAdmin' || Auth::user()->role === 'admin')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                        </li>
                        @if (Auth::user()->role === 'superAdmin')
                            <li class="nav-item">
                                <a class="nav-link" href="/users">Users</a>
                            </li>
                        @endif
                    @endif
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="/blog/all">Posts</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile: {{ Auth::user()->name }}</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
