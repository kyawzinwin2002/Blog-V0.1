<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function dashboard(){
        return view("Pages.dashboard");
    }

    public function home()
    {
        return view("Pages.home");
    }

    public function profile()
    {
        return view("Pages.profile");
    }
}
