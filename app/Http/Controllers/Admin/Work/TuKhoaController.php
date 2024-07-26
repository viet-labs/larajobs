<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\TuKhoa;
use Illuminate\Http\Request;

class TuKhoaController extends Controller
{
    public function index(Request $request)
    {
        $tuKhoaList = TuKhoa::get();
        return view('admin.tuKhoa-list', compact('tuKhoaList'));
    }

    public function addTuKhoa()
    {
        return view('admin.tuKhoa.create-tuKhoa');
    }

    public function saveTuKhoa(Request $request)
    {
        $tuKhoa = new TuKhoa();
        $tuKhoa->ten_hien_thi = $request->ten_hien_thi;
        $tuKhoa->slug = $request->slug;
        $tuKhoa->save();

        return redirect()->back()->with('success', 'Work Created Successfully');
    }

    public function editTuKhoa($id)
    {
        $tuKhoaList = TuKhoa::where('id', '=', $id)->first();
        return view('admin.tuKhoa.edit-tuKhoa', compact('tuKhoaList'));
    }

    public function updateTuKhoa(Request $request, TuKhoa $tuKhoa)
    {
        $tuKhoa->update($request->all());
        return redirect()->back()->with('success', 'Work Updated Successfully');
    }

    public function deleteTuKhoa($id)
    {
        $tuKhoa = TuKhoa::find($id);
        $tuKhoa->delete();
        return redirect()->back()->with('success', 'Work Deleted Successfully');
    }
}
