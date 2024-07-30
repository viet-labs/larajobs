<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TuKhoaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CongViec\UserController;
use App\Http\Controllers\Admin\CongViec\ToChucController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\CongViec\TuKhoaController as AdminTuKhoaController;
use App\Http\Controllers\Admin\CongViec\CongViecController as AdminCongViecController;

Route::middleware("auth")->group(function () {
    Route::get('/index', [TuKhoaController::class, 'tags'])->name('index');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('register.post');

Route::get('/worklist', [AdminCongViecController::class, 'index']);
Route::get('/addwork', [AdminCongViecController::class, 'createCongViec']);
Route::post('/savework', [AdminCongViecController::class, 'storeCongViec']);
Route::get('/showwork/{congViec}', [AdminCongViecController::class, 'showCongViec']);
Route::get('/editwork/{congViec}', [AdminCongViecController::class, 'editCongViec']);
Route::post('/updatework/{congViec}', [AdminCongViecController::class, 'updateCongViec']);
Route::get('/deletework/{congViec}', [AdminCongViecController::class, 'destroyCongViec']);

Route::get('/tochuclist', [ToChucController::class, 'index']);
Route::get('/addtochuc', [ToChucController::class, 'createToChuc']);
Route::post('/savetochuc', [ToChucController::class, 'storeToChuc']);
Route::get('/showtochuc/{toChuc}', [ToChucController::class, 'showToChuc']);
Route::get('/edittochuc/{toChuc}', [ToChucController::class, 'editToChuc']);
Route::post('/updatetochuc/{toChuc}', [ToChucController::class, 'updateToChuc']);
Route::get('/deletetochuc/{toChuc}', [ToChucController::class, 'destroyToChuc']);

Route::get('/tukhoalist', [AdminTuKhoaController::class, 'index']);
Route::get('/addtukhoa', [AdminTuKhoaController::class, 'createTuKhoa']);
Route::post('/savetukhoa', [AdminTuKhoaController::class, 'storeTuKhoa']);
Route::get('/showtukhoa/{tuKhoa}', [AdminTuKhoaController::class, 'showTuKhoa']);
Route::get('/edittukhoa/{tuKhoa}', [AdminTuKhoaController::class, 'editTuKhoa']);
Route::post('/updatetukhoa/{tuKhoa}', [AdminTuKhoaController::class, 'updateTuKhoa']);
Route::get('/deletetukhoa/{tuKhoa}', [AdminTuKhoaController::class, 'destroyTuKhoa']);

Route::get('/userlist', [UserController::class, 'index']);
Route::get('/adduser', [UserController::class, 'createUser']);
Route::post('/saveuser', [UserController::class, 'storeUser']);
Route::get('/showuser/{user}', [UserController::class, 'showUser']);
Route::get('/edituser/{user}', [UserController::class, 'editUser']);
Route::post('/updateuser/{user}', [UserController::class, 'updateUser']);
Route::get('/deleteuser/{user}', [UserController::class, 'destroyUser']);

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [HomeController::class, 'homepage'])->name('admin.home');
    Route::resource('jobs', AdminCongViecController::class);
});

Route::middleware('guest:admin')->group(function () {
    Route::get('/admin/login', [AdminLoginController::class, 'show'])->name('admin.login');
    Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.postLogin');
});
