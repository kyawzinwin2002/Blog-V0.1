<?php

namespace App\Http\Controllers;

use App\Models\Blogger;
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
        $blogger = Blogger::find(session("auth")->id);
        $blogger->photo = $path;
        $blogger->update();
        session(["auth" => $blogger]);
        return redirect()->back()->with("message","Photo Uploaded Successfully!");
    }
}
