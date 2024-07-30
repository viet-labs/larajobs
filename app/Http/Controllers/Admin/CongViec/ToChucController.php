<?php

namespace App\Http\Controllers\Admin\CongViec;

use App\Models\ToChuc;
use Illuminate\Http\Request;
use Illuminate\Support\Number;
use App\Http\Controllers\Controller;

class ToChucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $limit = $request->query('limit', 10);
        $limit = Number::clamp($limit, 1, 100);
        $toChuc = ToChuc::orderBy('id', 'asc')->paginate($limit);
        return view('admin.toChuc-list', compact('toChuc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createToChuc()
    {
        return view('admin.ToChuc.create-toChuc');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeToChuc(Request $request)
    {
        $request->validate([
            'ten_cong_ty' => 'required|min:3|max:255',
            'dia_chi_lien_he' => 'required',
            'website_url' => 'required',
            'user_id' => 'required',
        ]);

        ToChuc::create($request->only([
            'ten_cong_ty',
            'dia_chi_lien_he',
            'website_url',
            'user_id',
        ]));

        return redirect()->back()->with('success', 'Work Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showToChuc(ToChuc $toChuc)
    {
        return view('admin.ToChuc.show-toChuc', compact('toChuc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editToChuc(ToChuc $toChuc)
    {
        return view('admin.ToChuc.edit-toChuc', compact('toChuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateToChuc(Request $request, ToChuc $toChuc)
    {
        $toChuc->update($request->only([
            'ten_cong_ty',
            'dia_chi_lien_he',
            'website_url',
            'user_id',
        ]));
        return redirect()->back()->with('success', 'Work Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyToChuc(ToChuc $toChuc)
    {
        $toChuc->delete();
        return redirect()->back()->with('success', 'Work Deleted Successfully');
    }
}
