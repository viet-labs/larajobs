<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TuKhoaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CongViec\UserController;
use App\Http\Controllers\Admin\CongViec\ToChucController;
use App\Http\Controllers\Admin\CongViec\CongViecController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\CongViec\TuKhoaController as AdminTuKhoaController;

Route::middleware("auth")->group(function () {
    Route::get('/index', [TuKhoaController::class, 'tags'])->name('index');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('register.post');

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [HomeController::class, 'homepage'])->name('admin.home');
    Route::resource('cong-viec', CongViecController::class);
    Route::resource('to-chuc', ToChucController::class);
    Route::resource('tu-khoa', AdminTuKhoaController::class);
    Route::resource('user', UserController::class);
});

Route::middleware('guest:admin')->group(function () {
    Route::get('/admin/login', [AdminLoginController::class, 'show'])->name('admin.login');
    Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.postLogin');
});
