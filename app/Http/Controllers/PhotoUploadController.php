<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $path = $request->file("photo")->store("photos","public");
        $user = User::find(session("auth")->id);
        $user->photo = $path;
        $user->update();
        session(["auth" => $user]);
        return redirect()->back()->with("message","Photo Uploaded Successfully!");
    }
}
