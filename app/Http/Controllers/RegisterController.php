<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view("Auth.register");
    }

    public function store(Request $request)
    {
        return $request;
    }
}