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
    public function VerGrupo(){
        $validacion=Validator::make($request->all(),[
            'idUser' => 'required|Integer'
        ]);

        $idGrupo = GU::where("fk_users", $request->idUser)->first();
        $grupo = Grupo::find($idGrupo);
        if($grupo){
            return response()->json([
                "Data"=> $grupo
            ],200);     
        }
        /* if($user == 0){
            $Alumno = DB::table('users')
            ->select('users.*')
            ->where('rol_id', '2')
            ->get();

            return response()->json([
                "Data"=>$Alumno
            ],200);
        }*/
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
