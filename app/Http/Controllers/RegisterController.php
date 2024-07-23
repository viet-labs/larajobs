<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerPost(Request $request)
    {
        // $formData = $request->all();

        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return redirect(route("login"))->with("success", "User Created Successfully");
        }
        return redirect(route("register"))->with("error", "Failed To Create Account");

        // $formData = $request->only(['email', 'password']);

        // dd($validatedData);
    }
}
