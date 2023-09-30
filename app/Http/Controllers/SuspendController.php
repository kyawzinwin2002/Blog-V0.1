<?php

namespace App\Http\Controllers;

use App\Models\Blogger;
use Illuminate\Http\Request;

class SuspendController extends Controller
{
    public function active($id)
    {
        $user = Blogger::find($id);
        $user->suspended = "0";
        $user->update();
        return redirect()->back();
    }

    public function ban($id)
    {
        $user = Blogger::find($id);
        $user->suspended = "1";
        $user->update();
        return redirect()->back();
    }
}
