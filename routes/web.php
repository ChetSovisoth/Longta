<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SaveJobController;
use App\Models\SavedJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/edit', function () {
    return view('profile.profile_edit');
});

Auth::routes(['verify'=> true]);

Route::get('/profile', [CVController::class,'index'])->name('cv');

Route::post('/admin/job', [JobController::class, 'store'])->name('admin.job.store');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

Route::get('/save/job', [SaveJobController::class,'index'])->name('save.index');

Route::post('/save/job/{job}', [JobController::class,'save'])->name('save.job');

Route::post('/unsave/job/{job}', [JobController::class,'unsave'])->name('unsave.job');

Route::post('/unsaved/job/{job}', [SaveJobController::class,'unsave'])->name('unsaved.job');

Route::post('/cv/save', [CVController::class,'store'])->name('cv.store');

