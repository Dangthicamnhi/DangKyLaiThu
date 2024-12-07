<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

Route::get('/chitietsanpham', [UserController::class, 'showChiTietSanPham'])->name('sanpham');

Route::get('/dichvu', [UserController::class, 'dichvu'])->name('dichvu');
