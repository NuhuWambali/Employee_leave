<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('Auth.register');
// });
Route::get('/', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/admin', [AdminController::class, 'indexForAdmin'])->name('admin');

// Route::post('/', [AuthController::class, 'postLogin'])->name('postLogin');

// Route::post('/postRegister', [AuthController::class, 'postRegister'])->name('postRegister');

// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/', [AuthController::class, 'home'])->name('index')->middleware('auth');


