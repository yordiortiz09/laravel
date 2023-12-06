<?php

namespace App\Http\Controllers\Sistema_Calificaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(Request $request){
        $validacion=Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!$validacion->fails()){
            
            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Password y Email no coinciden.',
                ], 401);
            }
            
            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'Usuario logeado exitosamente',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
    
        }
        return response()->json([
            "Status"=> 400,
             "Msg"=> "Ups hubo un problema...",
             "Errores"=>$validacion->errors()
        ],400);

    }
}
