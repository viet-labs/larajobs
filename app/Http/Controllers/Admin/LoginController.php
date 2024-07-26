<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('admin.login');
    }

    function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentils = $request->only('email', 'password');
        $credentils['is_admin'] = true;

        if (Auth::guard('admin')->attempt($credentils)) {
            return redirect()->intended(route("admin.home"));
        }

        return redirectWithStatus(route("admin.login"), "Email or password in correct");
    }
}
