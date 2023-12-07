<?php

namespace App\Http\Controllers\Sistema_Calificaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GrupoUsersModel as GU;
use App\Models\CalificacionModel as Calificacion;
use Illuminate\Support\Facades\DB;
use App\Models\GrupoModel as Grupo;

class grupoController extends Controller
{
    public function VerGrupo($idUser){
        $user = DB::table('grupo_users')
        ->select('grupo_users.*')
        ->where('fk_users', $idUser)
        ->get();
        $idGrupo = GU::where("fk_users", $idUser)->first();
        $grupo = Grupo::find($idGrupo);
        if($grupo){
            return response()->json([
                "data"=> $grupo
            ],200);     
        }
        return response()->json([
            "Mensaje"=> "algo salio mal",
        ],400);  
    }
    
    /* public function InsertarGrupo(){
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
    } */
}
