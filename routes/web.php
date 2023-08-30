<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

//route to auth controller
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('postRegister', [AuthController::class, 'postRegister'])->name('postRegister');
Route::post('postLogin', [AuthController::class, 'postLogin'])->name('postLogin');


//route to admin controller
Route::get('/admin', [AdminController::class, 'indexForAdmin'])->name('admin');

