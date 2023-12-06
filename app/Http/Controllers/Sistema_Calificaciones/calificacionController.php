<?php

namespace App\Http\Controllers\Sistema_Calificaciones;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CalificacionModel as Calificacion;
use App\Models\Calificacion_Profesor_AlumnoModel as CAP;

class calificacionController extends Controller
{
    public function VerCalificacion(int $alumno, $profesor = 0){
        
    }

    public function InsertarCalificacion(){
        $validacion=Validator::make($request->all(),[
            'calificacion_1' =>'Required|Integer'
        ]);
        
        if(!$validacion->fails()){
            $cap = CAP::create([
                "Calificacion"
            ]);
            return response()->json([
                "Saludo"=> "hola mundo",
            ],200);
        }

        return response()->json([
            "errors"=> $validacion->errors(),
        ],400);
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
