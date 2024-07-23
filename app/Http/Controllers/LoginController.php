<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentils = $request->only('email', 'password');

        if (Auth::attempt($credentils)) {
            return redirect()->intended(route("index"));
        }

        return redirect(route("login"))->with("error", "Login Failed");
    }
}
