<?php

namespace App\Http\Controllers\Admin\CongViec;

use App\Models\CongViec;
use Illuminate\Http\Request;
use Illuminate\Support\Number;
use App\Http\Controllers\Controller;

class CongViecController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $limit = $request->query('limit', 10);
        $limit = Number::clamp($limit, 1, 100);
        $congViec = CongViec::orderBy('id', 'asc')->paginate($limit);
        return view('admin.work-list', compact('congViec'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createCongViec()
    {
        return view('admin.work.create-work');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCongViec(Request $request)
    {
        $request->validate([
            'tieu_de' => 'required|min:3|max:255',
            'hinh_thuc_lam_viec' => 'required',
            'loai_cong_viec' => 'required',
            'dia_chi_lam_viec' => 'required',
            'noi_dung' => 'required',
            'muc_luong_toi_thieu' => 'required',
            'muc_luong_toi_da' => 'required',
            'ngay_het_han' => 'required',
            'user_id' => 'required',
            'to_chuc_id' => 'required',
        ]);

        CongViec::create($request->only([
            'tieu_de',
            'hinh_thuc_lam_viec',
            'loai_cong_viec',
            'dia_chi_lam_viec',
            'noi_dung',
            'muc_luong_toi_thieu',
            'muc_luong_toi_da',
            'ngay_het_han',
            'user_id',
            'to_chuc_id',
        ]));

        return redirect()->back()->with('success', 'Work Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showCongViec(CongViec $congViec)
    {
        return view('admin.work.show-work', compact('congViec'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editCongViec(CongViec $congViec)
    {
        return view('admin.work.edit-work', compact('congViec'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCongViec(Request $request, CongViec $congViec)
    {

        $congViec->update($request->only([
            'tieu_de',
            'hinh_thuc_lam_viec',
            'loai_cong_viec',
            'dia_chi_lam_viec',
            'noi_dung',
            'muc_luong_toi_thieu',
            'muc_luong_toi_da',
            'ngay_het_han',
            'user_id',
            'to_chuc_id',
        ]));
        return redirect()->back()->with('success', 'Work Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyCongViec(CongViec $congViec)
    {
        $congViec->delete();
        return redirect()->back()->with('success', 'Work Deleted Successfully');
    }
}
