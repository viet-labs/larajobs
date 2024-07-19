<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validateWithBag('registration', [
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect('/dang-nhap')
            ->with(['message' => 'Đăng ký thành công!', 'type' => 'success']);
    }
}
