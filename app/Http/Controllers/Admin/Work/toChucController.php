<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\ToChuc;
use Illuminate\Http\Request;

class ToChucController extends Controller
{
    public function index(Request $request)
    {
        $toChucList = ToChuc::get();
        return view('admin.toChuc-list', compact('toChucList'));
    }

    public function addToChuc()
    {
        return view('admin.toChuc.create-toChuc');
    }

    public function saveToChuc(Request $request)
    {
        $toChuc = new ToChuc();
        $toChuc->ten_cong_ty = $request->ten_cong_ty;
        $toChuc->dia_chi_lien_he = $request->dia_chi_lien_he;
        $toChuc->website_url = $request->website_url;
        $toChuc->user_id = $request->user_id;
        $toChuc->save();

        return redirect()->back()->with('success', 'Work Created Successfully');
    }

    public function editToChuc($id)
    {
        $toChucList = ToChuc::where('id', '=', $id)->first();
        return view('admin.toChuc.edit-toChuc', compact('toChucList'));
    }

    public function updateToChuc(Request $request, ToChuc $toChuc)
    {
        $toChuc->update($request->all());
        return redirect()->back()->with('success', 'Work Updated Successfully');
    }

    public function deleteToChuc($id)
    {
        $toChuc = ToChuc::find($id);
        $toChuc->delete();
        return redirect()->back()->with('success', 'Work Deleted Successfully');
    }
}
