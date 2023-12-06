<?php

namespace App\Http\Controllers\Sistema_Calificaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class grupoController extends Controller
{
    public function VerGrupo(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }

    public function InsertarGrupo(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }

    public function ModificarGrupo(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }

    public function EliminarGrupo(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }
}
