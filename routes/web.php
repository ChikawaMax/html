<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DogController;
use Illuminate\Support\Facades\Route;

//index create store show edit update destroyを定義
Route::resource('books', BookController::class);

Route::resource('dogs', DogController::class);
