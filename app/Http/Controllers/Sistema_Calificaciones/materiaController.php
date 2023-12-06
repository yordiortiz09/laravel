<?php

namespace App\Http\Controllers\Sistema_Calificaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class materiaController extends Controller
{
    public function VerMateria(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }

    public function InsertarMateria(){
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
    }
}
