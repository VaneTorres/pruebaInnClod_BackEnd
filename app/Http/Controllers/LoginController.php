<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request){
        //Autenticacion de usuario
        if(Auth::attempt($request->only('email','password'))){
            //Generacion de token
            $token=Auth::user()->createToken('NombreDeLaAplicacion')->accessToken;
            return response()->json(['token'=>$token],200);
        }else{
            return response()->json(['error'=>'Unauthorized'],401);
        }
    }
    public function logout(){
        Auth::logout();
        return response()->json(200);

    }
}
