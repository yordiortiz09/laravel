<?php

namespace App\Http\Controllers\Sistema_Calificaciones;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class calificacionController extends Controller
{
    public function VerCalificacion(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }

    public function InsertarCalificacion(){
        $validacion=Validator::make($request->all(),[
            'calificacion_1' =>'Required|Integer'
        ]);
        
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }

    public function ModificarCalificacion(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }

    public function EliminarCalificacion(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }

}
