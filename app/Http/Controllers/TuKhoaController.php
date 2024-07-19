<?php

namespace App\Http\Controllers;

use App\Models\TuKhoa;
use Illuminate\Http\Request;
use Illuminate\Support\Number;

class TuKhoaController extends Controller
{
    public function tags(Request $request)
    {
        $limit = $request->query('limit', 10);
        $limit = Number::clamp($limit, 1, 100);
        $tuKhoaList = TuKhoa::orderBy('id', 'desc')->paginate($limit);

        // dd($tuKhoaList);

        return view('home', compact('tuKhoaList'));
    }
}
