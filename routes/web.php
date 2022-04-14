<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//Posts
Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:id}', [PostController::class, 'show']);

// Route::get('admin/posts/create', [PostController::class, 'create'])->middleware('admin');

// Route::post('admin/posts', [PostController::class, 'store'])->middleware('admin');

// Route::get('admin/posts/{post:id}/edit', [PostController::class, 'edit'])->middleware('admin');

// Route::post('admin/posts/{post:id}/update', [PostController::class, 'update'])->middleware('admin');

//Comments
Route::post('/posts/{post}/comments', [CommentController::class, 'store']);


// Route::middleware('can:admin')->group(function () {
//     Route::post('admin/posts', [AdminPostController::class, 'store']);
//     Route::get('admin/posts/create', [AdminPostController::class, 'create']);
//     Route::get('admin/posts', [AdminPostController::class, 'index']);
//     Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
//     Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
//     Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);
// });

//Route::resource('admin/posts', AdminPostController::class)->except('show')->middleware('admin');

Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});
