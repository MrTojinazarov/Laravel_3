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
Route::get('/category-create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::delete('/category/{id}', [CategoryController::class, 'delete']);



Route::get('/post', [PostController::class, 'post']);
Route::get('/post-create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::delete('/post/{id}', [PostController::class, 'delete']);


Route::get('/like', [LikeController::class, 'like']);
Route::get('/like-create', [LikeController::class, 'create']);
Route::get('/like/{id}', [LikeController::class, 'show']);
Route::delete('/like/{id}', [LikeController::class, 'delete']);


Route::get('/comment', [CommentController::class, 'comment']);
Route::get('/comment-create', [CommentController::class, 'create']);
Route::get('/comment/{id}', [CommentController::class, 'show']);
Route::delete('/comment/{id}', [CommentController::class, 'delete']);


