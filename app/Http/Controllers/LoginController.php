<?php

namespace App\Http\Controllers;

use App\Models\Blogger;
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
            "email" => "required|string|exists:bloggers,email",
            "password" => "required|min:8"
        ],["email.exists" => "Email or Password is invalid!"]);

        $blogger = Blogger::where("email",$request->email)->first();
        if(!Hash::check($request->password,$blogger->password)){
            return redirect()->back()->withErrors(["email" => "Email or Password is invalid!"]);
        }
        session(["auth" => $blogger]);
        return redirect()->route("page.home")->with("message","Welcome ".$blogger->name);
    }
}
