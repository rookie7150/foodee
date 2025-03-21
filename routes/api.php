<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::post('/posts',[PostController::class, 'store']);
Route::get('/posts',[PostController::class, 'index']);