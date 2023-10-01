<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChangeRoleController extends Controller
{
    public function changeRole(Request $request)
    {
        $user_id = $request->id;
        $role_id = $request->role_id;
        $user = User::find($user_id);
        $user->role_id = $role_id;
        $user->update();
        return redirect()->back();
    }
}
