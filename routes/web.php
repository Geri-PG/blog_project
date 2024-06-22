<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/blog', 'blog');

Route::post('/blog-create', [PostsController::class, 'create'])->name('blog.create');

Route::get('/blog-all', [PostsController::class, 'allBlogs'])->name('blog.all');

Route::get('/blog-user/{slug}', [PostsController::class, 'userBlog'])->name('blog.user');

Route::get('/blog-delete/{blog}', [PostsController::class, 'deleteBlog'])->name('blog.delete');

Route::get('/blog-edit/{blog}', [PostsController::class, 'editBlog'])->name('blog.edit');

Route::post('/blog-save/{blog}', [PostsController::class, 'saveBlog'])->name('blog.save');

Route::get('/blogs/{blog}', [PostsController::class, 'show'])->name('blogs.show');













Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
