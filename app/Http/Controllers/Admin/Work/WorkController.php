<?php

namespace App\Http\Controllers\Admin\Work;

use App\Models\CongViec;
use Illuminate\Http\Request;
use Illuminate\Support\Number;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->query('limit', 10);
        $limit = Number::clamp($limit, 1, 100);
        $workList = CongViec::orderBy('id', 'asc')->paginate($limit);
        return view('admin.work-list', compact('workList'));

    }

    public function addWork()
    {
        return view('admin.work.create-work');
    }

    public function saveWork(Request $request)
    {
        $work = new CongViec();
        $work->tieu_de = $request->tieu_de;
        $work->hinh_thuc_lam_viec = $request->hinh_thuc_lam_viec;
        $work->loai_cong_viec = $request->loai_cong_viec;
        $work->dia_chi_lam_viec = $request->dia_chi_lam_viec;
        $work->noi_dung = $request->noi_dung;
        $work->muc_luong_toi_thieu = $request->muc_luong_toi_thieu;
        $work->muc_luong_toi_da = $request->muc_luong_toi_da;
        $work->ngay_het_han = $request->ngay_het_han;
        $work->user_id = $request->user_id;
        $work->to_chuc_id = $request->to_chuc_id;
        $work->save();

        return redirect()->back()->with('success', 'Work Created Successfully');
    }

    public function editWork($id)
    {
        $workList = CongViec::where('id', '=', $id)->first();
        return view('admin.work.edit-work', compact('workList'));
    }

    public function updateWork(CongViec $congViec, Request $request)
    {

        $congViec->update($request->only([
            'tieu_de'
        ]));
        return redirect()->back()->with('success', 'Work Updated Successfully');
    }

    public function deleteWork($id)
    {
        $congViec = CongViec::find($id);
        $congViec->delete();
        return redirect()->back()->with('success', 'Work Deleted Successfully');
    }
}
