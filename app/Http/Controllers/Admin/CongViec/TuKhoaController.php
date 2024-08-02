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
        return view('admin.tukhoa.tuKhoa-list', compact('tuKhoa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tukhoa.create-tuKhoa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
    public function show(TuKhoa $tuKhoa)
    {
        return view('admin.tukhoa.show-tuKhoa', compact('tuKhoa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TuKhoa $tuKhoa)
    {
        return view('admin.tukhoa.edit-tuKhoa', compact('tuKhoa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TuKhoa $tuKhoa)
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
    public function destroy(TuKhoa $tuKhoa)
    {
        $tuKhoa->delete();
        return redirect()->back()->with('success', 'Work Deleted Successfully');
    }
}
