<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/blog-create', [PostsController::class, 'create'])->name('blog.create');

Route::get('/blog-all', [PostsController::class, 'allBlogs'])->name('blog.all');


Route::middleware('auth')->group(function () {

    Route::view('/blog', 'blog')->name('blog');

    Route::get('/blog-delete/{blog}', [PostsController::class, 'deleteBlog'])
        ->middleware(AdminMiddleware::class)
        ->name('blog.delete');

    Route::get('/blog-edit/{blog}', [PostsController::class, 'editBlog'])
        ->middleware(AdminMiddleware::class)
        ->name('blog.edit');

    Route::post('/blog-save/{blog}', [PostsController::class, 'saveBlog'])
        ->middleware(AdminMiddleware::class)
        ->name('blog.save');
});


Route::get('/users', [RegisteredUserController::class, 'users'])->name('users');

Route::get('/users/{user}', [RegisteredUserController::class, 'userDelete'])->name('users.delete');

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
