<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.client.home');
});

Route::controller(AuthController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login_post');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'register_post');
});
