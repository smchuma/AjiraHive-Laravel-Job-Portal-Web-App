<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/login');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/register/seeker', [UserController::class, 'createSeeker'])->name('create.seeker');
Route::post('/register/seeker', [UserController::class, 'storeSeeker'])->name('store.seeker');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginPost'])->name('login.post');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('verified')->name('dashboard');

Route::get('/register/employer', [UserController::class, 'createEmployer'])->name('create.employer');
Route::post('/register/employer', [UserController::class, 'storeEmployer'])->name('store.employer');

Route::get('/verify', [DashboardController::class, 'verify'])->name('verification.notice');

Route::get('/resend/verification/email', [DashboardController::class, 'resend'])->name('resend.email');