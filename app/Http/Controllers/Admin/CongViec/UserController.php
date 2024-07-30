<?php

namespace App\Http\Controllers\Admin\CongViec;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Number;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $limit = $request->query('limit', 10);
        $limit = Number::clamp($limit, 1, 100);
        $user = User::orderBy('id', 'asc')->paginate($limit);
        return view('admin.user-list', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createUser()
    {
        return view('admin.User.create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        User::create($request->only([
            'name',
            'email',
            'password',
        ]));

        return redirect()->back()->with('success', 'Work Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showUser(User $user)
    {
        return view('admin.User.show-user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editUser(User $user)
    {
        return view('admin.User.edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateUser(Request $request, User $user)
    {
        $user->update($request->only([
            'name',
            'email',
            'password',
        ]));
        return redirect()->back()->with('success', 'Work Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyUser(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'Work Deleted Successfully');
    }
}
