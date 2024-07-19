<?php

use App\Http\Controllers\CongViecController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TuKhoaController;
use App\Models\CongViec;
use App\Models\TuKhoa;
use Illuminate\Support\Facades\Route;

Route::get('/', [TuKhoaController::class, 'tags']);
Route::get('/dang-ky', [RegisterController::class, 'show']);
Route::post('/dang-ky', [RegisterController::class, 'register']);
