<?php

namespace App\Http\Controllers\Admin\CongViec;

use App\Models\TuKhoa;
use Illuminate\Http\Request;
use Illuminate\Support\Number;
use App\Http\Controllers\Controller;

class TuKhoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $limit = $request->query('limit', 10);
        $limit = Number::clamp($limit, 1, 100);
        $tuKhoa = TuKhoa::orderBy('id', 'asc')->paginate($limit);
        return view('admin.tuKhoa-list', compact('tuKhoa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createTuKhoa()
    {
        return view('admin.TuKhoa.create-tuKhoa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeTuKhoa(Request $request)
    {
        $request->validate([
            'ten_hien_thi' => 'required|min:3|max:50',
            'slug' => 'required',
        ]);

        TuKhoa::create($request->only([
            'ten_hien_thi',
            'slug',
        ]));

        return redirect()->back()->with('success', 'Work Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showTuKhoa(TuKhoa $tuKhoa)
    {
        return view('admin.TuKhoa.show-tuKhoa', compact('tuKhoa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editTuKhoa(TuKhoa $tuKhoa)
    {
        return view('admin.TuKhoa.edit-tuKhoa', compact('tuKhoa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateTuKhoa(Request $request, TuKhoa $tuKhoa)
    {
        $tuKhoa->update($request->only([
            'ten_hien_thi',
            'slug',
        ]));
        return redirect()->back()->with('success', 'Work Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyTuKhoa(TuKhoa $tuKhoa)
    {
        $tuKhoa->delete();
        return redirect()->back()->with('success', 'Work Deleted Successfully');
    }
}
