<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

route::get('/', [UserController::class, 'index'])->name('home');

// routes/web.php
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//show trang admin
Route::get('/admin', [UserController::class, 'showAdminForm'])->name('admin');

Route::get('update/{id}', [UserController::class, 'updateUser'])->name('user.updateUser');

Route::post('update/{id}', [UserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('delete/{id}', [UserController::class, 'deleteUser'])->name('user.deleteUser');
