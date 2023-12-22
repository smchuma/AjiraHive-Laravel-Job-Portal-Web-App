<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::get('/register/seeker', [UserController::class, 'createSeeker']);
Route::get('/register/employer', [UserController::class, 'createEmployer']);
