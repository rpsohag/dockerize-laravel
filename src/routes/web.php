<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/{post}', [PostController::class,'show']);
Route::get('/posts/{post}/comments', [CommentController::class,'index']);
Route::get('/posts/{post}/comments/{comment}', [CommentController::class,'show'])->scopeBindings();
