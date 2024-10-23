<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'admin']);
Route::get('/category', [CategoryController::class, 'category']);
Route::get('/post', [PostController::class, 'post']);
Route::get('/like', [LikeController::class, 'like']);
Route::get('/comment', [CommentController::class, 'comment']);
