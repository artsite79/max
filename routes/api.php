<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*  Route::apiResources([
    'blog' => BlogController::class,
  ///  'posts' => PostController::class,
]); */

Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('blogs/{blog}', [BlogController::class, 'show'])->name('blog.show');
Route::post('blogs', [BlogController::class, 'create'])->name('blog.create');
Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('blogs/{blog}', [BlogController::class, 'delete'])->name('blog.delete');


Route::get('comments', [CommentController::class, 'index'])->name('comments');
Route::get('comments/{comment}', [CommentController::class, 'show'])->name('comment.show');
Route::post('comments', [CommentController::class, 'create'])->name('comment.create');
Route::put('comments/{comment}', [CommentController::class, 'update'])->name('comment.update');
Route::delete('comments/{comment}', [CommentController::class, 'delete'])->name('comment.delete');



