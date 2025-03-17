<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/posts',[PostController::class, 'store']);
Route::get('/posts',[PostController::class, 'index']);