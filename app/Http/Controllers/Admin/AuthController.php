<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request) {

        if ( !Auth::attempt($request->only('email', 'password')) ) {
            return redirect()->route('admin.login');
        }

        return redirect()->route("admin.dashboard.index");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("admin.login");
    }
}
