<?php

use App\Models\ToChuc;
use App\Models\TuKhoa;
use App\Models\CongViec;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\TuKhoaController;
use App\Http\Controllers\CongViecController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Work\WorkController;
use App\Http\Controllers\Admin\Work\ToChucController;

Route::middleware("auth")->group(function () {
    Route::get('/index', [TuKhoaController::class, 'tags'])->name('index');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('register.post');

Route::get('/work-list', [WorkController::class, 'index']);
Route::get('/add-work', [WorkController::class, 'addWork']);
Route::post('/save-work', [WorkController::class, 'saveWork']);
Route::get('/edit-work/{id}', [WorkController::class, 'editWork']);
Route::post('/update-work', [WorkController::class, 'updateWork']);
Route::get('/delete-work/{id}', [WorkController::class, 'deleteWork']);

Route::get('/toChuc-list', [ToChucController::class, 'index']);
Route::get('/add-toChuc', [ToChucController::class, 'addToChuc']);
Route::post('/save-toChuc', [ToChucController::class, 'saveToChuc']);
Route::get('/edit-toChuc/{id}', [ToChucController::class, 'editToChuc']);
Route::post('/update-toChuc', [ToChucController::class, 'updateToChuc']);
Route::get('/delete-toChuc/{id}', [ToChucController::class, 'deleteToChuc']);

Route::get('/tuKhoa-list', [TuKhoaController::class, 'index']);
Route::get('/add-tuKhoa', [TuKhoaController::class, 'addTuKhoa']);
Route::post('/save-tuKhoa', [TuKhoaController::class, 'saveTuKhoa']);
Route::get('/edit-tuKhoa/{id}', [TuKhoaController::class, 'editTuKhoa']);
Route::post('/update-tuKhoa', [TuKhoaController::class, 'updateTuKhoa']);
Route::get('/delete-tuKhoa/{id}', [TuKhoaController::class, 'deleteTuKhoa']);


Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [HomeController::class, 'homepage'])->name('admin.home');
});

Route::middleware('guest:admin')->group(function () {
    Route::get('/admin/login', [AdminLoginController::class, 'show'])->name('admin.login');
    Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.postLogin');
});
