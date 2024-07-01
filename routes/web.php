<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SaveJobController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile.profile');
});

Route::get('/profile/edit', function () {
    return view('profile.profile_edit');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
});

Auth::routes(['verify'=> true]);

Route::post('/admin/job', [JobController::class, 'store'])->name('admin.job.store');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

Route::get('/save/job', [SaveJobController::class,'index'])->name('save.index');

Route::post('/save/job/{job}', [SaveJobController::class,'save'])->name('save.job');

Route::post('/unsave/job/{job}', [SaveJobController::class,'unsave'])->name('unsave.job');

