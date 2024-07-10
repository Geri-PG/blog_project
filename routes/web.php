<?php


use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/blog-create', [PostsController::class, 'create'])->name('blog.create');

Route::get('/blog-all', [PostsController::class, 'allBlogs'])->name('blog.all');

Route::view('/blog', 'blog')->name('blog');

Route::get('/blogs/{blog}', [PostsController::class, 'show'])->name('blogs.show');


Route::get('/users', [RegisteredUserController::class, 'users'])->name('users');
Route::get('/users/{user}', [RegisteredUserController::class, 'userDelete'])->name('users.delete');

Route::middleware(['auth', UserMiddleware::class])->group(function () {
    Route::get('/blog-edit/{blog}', [PostsController::class, 'editBlog'])->name('blog.edit');
    Route::get('/blog-delete/{blog}', [PostsController::class, 'deleteBlog'])->name('blog.delete');
    Route::post('/blog-save/{blog}', [PostsController::class, 'saveBlog'])->name('blog.save');
});







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
