<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {
        session()->forget("auth");
        return redirect()->route("auth.login")->with("message","Logout Successfully");
    }
}
