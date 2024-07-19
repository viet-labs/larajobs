<?php

namespace App\Http\Controllers;

use App\Models\CongViec;
use Illuminate\Http\Request;
use Illuminate\Support\Number;

class CongViecController extends Controller
{
    public function testdb(Request $request)
    {
        $limit = $request->query('limit', 10);
        $limit = Number::clamp($limit, 1, 100);
        $congViecList = CongViec::orderBy('id', 'desc')->paginate($limit);

        // dd($congviecList->toArray());

        return view('home', compact('congViecList'));
    }

}
