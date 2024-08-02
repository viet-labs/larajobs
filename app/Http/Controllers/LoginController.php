<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    function loginPost(LoginRequest $request)
    {

        $credentils = $request->only('email', 'password');

        if (Auth::attempt($credentils)) {
            $request->session()->regenerate();
            return redirect()->intended(route("index"));
        }

        return redirectWithStatus(route("login"), "Email or password is incorrect");
    }
}
