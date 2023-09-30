<?php

namespace App\Http\Controllers;

use App\Models\Blogger;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verify()
    {
        return view("Auth.verify");
    }

    public function check(Request $request)
    {
        $user = Blogger::find(session("auth")->id);
        if($user->verify_code != $request->verify_code){
            return redirect()->back()->withErrors(["verify_code" => "Verification code is invalid"]);
        }
        $user->email_verified_at = now();
        $user->update();
        session(["auth" => $user]);
        return redirect()->route("page.profile")->with("message","Verified Successfully");
    }
}
