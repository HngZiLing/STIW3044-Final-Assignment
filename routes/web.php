<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;

Route::get('/', [AuthController::class, 'index'])->name('index');
Route::get('landing', [AuthController::class, 'index'])->name('landing');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('mainpage', [SubjectController::class, 'mainpage'])->name('mainpage');
Route::post('/saveSubject',[SubjectController::class,'saveSubject'])->name('saveSubject');