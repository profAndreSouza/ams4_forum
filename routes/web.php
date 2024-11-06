<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'HomeForum'])->name('forum');

Route::resource('categories', CategoryController::class);



