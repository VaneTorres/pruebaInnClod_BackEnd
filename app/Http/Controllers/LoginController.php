<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request){
        if(Auth::attempt($request->only('email','password'))){
            return response()->json(Auth::user(),200);
        }else{
            return response()->json(['error'=>'Unauthorized'],401);
        }
    }
    public function logout(){
        Auth::logout();
    }
}
