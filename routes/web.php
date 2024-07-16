<?php

use App\Models\CongViec;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CongViecController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testdb', function () {
    return view('viewlarajobs/testdb');
});

Route::get('/app', function () {
    return view('viewlarajobs/app');
});

