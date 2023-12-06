<?php

namespace App\Http\Controllers\Sistema_Calificaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GrupoUsersModel as GU;
use App\Models\CalificacionModel as Calificacion;
use App\Models\MateriaModel as Materia;
use App\Models\User;
use App\Models\Calificacion_Profesor_AlumnoModel as CPA;

class alumnoController extends Controller
{
    public function VerAlumno(int $id = 0){
       if($id == 0){
       
        }
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);   
    }

    public function InsertarAlumno(){
        $validacion=Validator::make($request->all(),[
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        if(!$validacion->fails()){
            $user = User::create([
                'nombre' => $request->nombre,
                'apellidoPaterno' => $request->apellidoPaterno,
                'apellidoMaterno' => $request->apellidoMaterno,
                'email' => $request->email,
                'rol_id' => 2,
                'password' => Hash::make($request->password)
            ]);
    
            return response()->json([
                "Status"=> 200,
                'token' => $token,
                'numero' => $numero_aleatorio,
                'rol' => $user->id_rol
            ],200);
        }

        return response()->json([
            "Status"=> 400,
             "Msg"=> "Ups hubo un problema...",
             "Errores"=>$validacion->errors()
        ],400);
    }

    public function ModificarAlumno(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }

    public function EliminarAlumno(){
        return response()->json([
            "Saludo"=> "hola mundo",
        ],200);
    }
}
