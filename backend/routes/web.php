<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/register', function () {
    return view('Register');
});

Route::post('/register', [UserController::class, 'store'])->name('user.store');

Route::get('/login', function () {
    return view('Login');
});

Route::post('/login', [UserController::class, 'login'])->name('user.login');
