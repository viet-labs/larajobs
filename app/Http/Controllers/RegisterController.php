<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerPost(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return redirectWithStatus(route("login"), "Account \"$user->email\" is Created Successfully", "success");
        }

        return redirectWithStatus(route("register"), "Account Created Failed", "error");
    }
}
