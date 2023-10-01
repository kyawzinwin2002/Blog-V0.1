<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view("Auth.login");
    }

    public function check(Request $request)
    {
        $request->validate([
            "email" => "required|string|exists:users,email",
            "password" => "required|min:8"
        ],["email.exists" => "Email or Password is invalid!"]);

        $user = User::where("email",$request->email)->first();
        if(!Hash::check($request->password,$user->password)){
            return redirect()->back()->withErrors(["email" => "Email or Password is invalid!"]);
        }
        session(["auth" => $user]);
        return redirect()->route("page.home")->with("message","Welcome ".$user->name);
    }
}
