<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin() 
    {
        return view("auth.login");
    }

    public function cekLogin(Request $request) 
    {
        $user = User::where('email',$request->email)->first();
        if (!Hash::check($request->password, $user?->password)){
            throw ValidationException::withMessages([
                'password' => 'Email atau Password salah!'
            ]);
        }
        return view("admin.dashboard");
    }
}
