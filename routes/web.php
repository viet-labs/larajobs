<?php

use App\Models\TuKhoa;
use App\Models\CongViec;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TuKhoaController;
use App\Http\Controllers\CongViecController;
use App\Http\Controllers\RegisterController;


Route::middleware("auth")->group(function (){
    Route::get('/index', [TuKhoaController::class, 'tags'])->name('index');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('register.post');

