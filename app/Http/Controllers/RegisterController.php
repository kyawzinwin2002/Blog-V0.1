<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view("Auth.register");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|min:3|max:200",
            "email" => "required|unique:users,email",
            "password" => "required|min:8|confirmed"
        ]);

        $verify_code = rand(000000,999999);
        logger("Your Verification code is ".$verify_code);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->verify_code = $verify_code;
        $user->user_token = md5($verify_code);
        $user->save();
        return redirect()->route("auth.login")->with("message","Registered Successfully");
    }
}
