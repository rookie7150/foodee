<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controller\PostController;

Route::get('/', function () {
    return view('home');
});

