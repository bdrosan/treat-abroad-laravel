<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Auth::user();
        return view('admin.profile.index', [
            'profile' => $profile
        ]);
    }

    public function edit()
    {
        $profile = Auth::user();
        return view('admin.profile.edit', [
            'profile' => $profile
        ]);
    }

    public function update(Request $request)
    {
        if ($request->exists("thumbnail")) {
            $image = time() . "-profile.jpg";
            $request
                ->file("thumbnail")
                ?->storeAs("images", $image);
        }
        if ($request->get("password") != $request->get("repassword")) {
            return redirect()->back()->withErrors(["password" => "Passwords Don't Match"]);
        }
        Auth::user()->update([
            "name" => $request->get("name"),
            "email" => $request->get("email"),
            "thumbnail" => $image ?? Auth::user()->thumbnail,
            "password" => strlen($request->get("password", "")) ? Hash::make($request->get("password")) : Auth::user()->password,
        ]);
        return redirect()->route("admin.profile.index");
    }
}
