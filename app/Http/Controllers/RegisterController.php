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
            return redirect(route("login"))->with("stutus", [
                'type' => 'success',
                'message' => 'User Created Successfully',
            ]);
        }

        return redirect(route("register"))->with("status", [
            'type' => 'error',
            'message' => 'Account Creation Failed',
        ]);
    }
}
