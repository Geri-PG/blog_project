<?php


use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::view('/', 'welcome');
Route::view('/blog', 'blog')->name('blog');

Route::controller(RegisteredUserController::class)->name('users.')->group(function () {
    Route::get('/users', 'users')->name('users');
    Route::get('/users/{user}', 'userDelete')->name('delete');
});


Route::controller(PostsController::class)->name('blog.')->group(function () {
    Route::post('/blog/create', 'create')->name('create');
    Route::get('/blog/all', 'allBlogs')->name('all');
    Route::get('/blogs/{blog}', 'show')->name('show');

    Route::middleware(['auth', UserMiddleware::class])->group(function () {
        Route::get('/blog/edit/{blog}', 'editBlog')->name('edit');
        Route::get('/blog/delete/{blog}', 'deleteBlog')->name('delete');
        Route::post('/blog/save/{blog}', 'saveBlog')->name('save');
    });
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
