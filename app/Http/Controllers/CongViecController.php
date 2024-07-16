<?php

namespace App\Http\Controllers;

use App\Models\CongViec;
use Illuminate\Http\Request;

class CongViecController extends Controller
{
    public function testdb()
    {
        return CongViec::with('cong_viec')->get();
    }
}
