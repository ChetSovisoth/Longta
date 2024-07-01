<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile.profile');
});

Auth::routes();

Route::get('/prof', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
