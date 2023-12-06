<?php

namespace App\Http\Controllers\Sistema_Calificaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MateriaModel as Materia;

class materiaController extends Controller
{
    public function VerMateria(Request $request, int $id = 0){
        if($id == 0){
            $Materias = Materia::get();

            return response()->json([
                "Data"=>$Materias
            ],200);
        }

        $materia = Materia::find($id);

        if($materia){
            return response()->json([
                "Data"=> $materia
            ],200);     
        }

        return response()->json([
            "Mensaje"=> "algo salio mal",
        ],400);  
    }
    /* public function InsertarMateria(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }

    public function ModificarMateria(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }

    public function EliminarMateria(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    } */
}
