<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::any('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index')->middleware('auth');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show')->middleware('auth');
Route::post('/jobs/{id}/apply', [JobController::class, 'apply'])->name('apply');

Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.index')->middleware('auth');