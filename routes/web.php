<?php

use App\Models\CongViec;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TuKhoaController;
use App\Http\Controllers\CongViecController;
use App\Models\TuKhoa;


Route::get('/test', [CongViecController::class, 'testdb']);

Route::get('/', [TuKhoaController::class, 'tags']);


