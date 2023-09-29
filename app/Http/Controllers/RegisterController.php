<?php

namespace App\Http\Controllers;

use App\Models\Blogger;
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
            "email" => "required|unique:bloggers,email",
            "password" => "required|min:8|confirmed"
        ]);

        $verify_code = rand(000000,999999);
        logger("Your Verification code is ".$verify_code);
        $blogger = new Blogger();
        $blogger->name = $request->name;
        $blogger->email = $request->email;
        $blogger->password = Hash::make($request->password);
        $blogger->verify_code = $verify_code;
        $blogger->user_token = md5($verify_code);
        $blogger->save();
        return redirect()->route("auth.login")->with("message","Registered Successfully");
    }
}
