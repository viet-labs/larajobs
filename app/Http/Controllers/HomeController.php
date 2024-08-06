<?php

namespace App\Http\Controllers;

use App\Models\CongViec;

class HomeController extends Controller
{
    public function index()
    {
        $congViecList = CongViec::orderBy('id', 'DESC')->paginate(15);

        return view('user.home', compact('congViecList'));
    }
}
