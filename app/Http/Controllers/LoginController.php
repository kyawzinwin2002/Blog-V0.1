<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view("Auth.login");
    }

    public function check(Request $request)
    {
        return $request;
    }
}
