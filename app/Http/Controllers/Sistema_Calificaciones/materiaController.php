<?php

namespace App\Http\Controllers\Sistema_Calificaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MateriaModel as Materia;

class materiaController extends Controller
{
    public function VerMateria($id = 0){
        if($id == 0){
            $materia = Materia::all();
            return response()->json([
                "data"=> $materia
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
