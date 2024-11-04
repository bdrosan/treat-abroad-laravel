<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function login(Request $request): Application|Response|\Illuminate\Contracts\Foundation\Application|ResponseFactory
    {
        
        $token = "";
        return response([
            "status" => "success",
            "message" => "login success",
            "data" => [
                "token" => $token
            ]
        ]);
    }
}
