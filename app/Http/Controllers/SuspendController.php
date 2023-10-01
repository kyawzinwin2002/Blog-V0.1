<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SuspendController extends Controller
{
    public function active($id)
    {
        $user = User::find($id);
        $user->suspended = "0";
        $user->update();
        return redirect()->back();
    }

    public function ban($id)
    {
        $user = User::find($id);
        $user->suspended = "1";
        $user->update();
        return redirect()->back();
    }
}
