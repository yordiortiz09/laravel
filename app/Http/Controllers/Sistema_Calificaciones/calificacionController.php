<?php

namespace App\Http\Controllers\Sistema_Calificaciones;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CalificacionModel as Calificacion;
use App\Models\Calificacion_Profesor_AlumnoModel as CAP;
use Illuminate\Support\Facades\DB;

class calificacionController extends Controller
{
    public function VerCalificacion(Request $request){
        $validacion=Validator::make($request->all(),[
            'idMateria' =>'Required|Integer',
            'idProfesor' =>'Required|Integer',
            'idAlumno' =>'Required|Integer'
        ]);
        
        if(!$validacion->fails()){
            $cal = CAP::where('fk_materia', "=", $request->idMateria)
            ->where('fk_profesor', "=", $request->idProfesor)
            ->where('fk_alumno', "=", $request->idAlumno)
            ->first();

            if(!$cal)
                return response()->json([
                    "Mensaje"=> "No hay calificaciones",
                ],200);

            $calificacion = Calificacion::find($cal->fk_calificacion);
            
            return response()->json([
                "Data"=> $calificacion
            ],200);
        }

        return response()->json([
            "errors"=> $validacion->errors(),
        ],400);
    }

    public function InsertarCalificacion(Request $request){
        $validacion=Validator::make($request->all(),[
            'calificacion_1' =>'Required|Integer',
            'idMateria' =>'Required|Integer',
            'idProfesor' =>'Required|Integer',
            'idAlumno' =>'Required|Integer'
        ]);
        
        if(!$validacion->fails()){
            $calificacion = Calificacion::create([
                "calificacion_1" => $request->calificacion_1
            ]);

            $cap = CAP::create([
                "fk_calificacion" => $calificacion->id,
                "fk_materia" => $request->idMateria,
                "fk_profesor" => $request->idProfesor,
                "fk_alumno" => $request->idAlumno,
            ]);

            return response()->json([
                "Mensaje"=> "Calificacion subida exitosamente",
            ],200);
        }

        return response()->json([
            "errors"=> $validacion->errors(),
        ],400);
    }

    public function ModificarCalificacion(Request $request, int $cal){
        $validacion = Validator::make($request->all(), [
            'idCalificacion' => 'required|integer',
            'calificacion' => 'required|integer',
        ]);
    
        if (!$validacion->fails()) {
            $calificacion = Calificacion::find($request->idCalificacion);
    
            if ($calificacion) {
                if ($cal == 1) {
                    $calificacion->calificacion_1 = $request->calificacion;
                } elseif ($cal == 2) {
                    $calificacion->calificacion_2 = $request->calificacion;
                } else {
                    $calificacion->calificacion_3 = $request->calificacion;
                }
    
                $calificacion->save();
    
                return response()->json([
                    "Status" => 204,
                    "Msg" => "Los datos se cambiaron de forma exitosa",
                    "Data" => $calificacion
                ], 204);
            } else {
                return response()->json([
                    "Status" => 404,
                    "Msg" => "Calificación no encontrada",
                ], 404);
            }
        }
    
        return response()->json([
            "errors" => $validacion->errors(),
        ], 400);
    }

    public function EliminarCalificacion(Request $request, int $cal){
        $validacion=Validator::make($request->all(),[
            'idCalificacion' =>'Required|Integer',
        ]);
        
        if(!$validacion->fails()){
            $calificacion = Calificacion::find($request->idCalificacion);
            if($cal == 1){
                $calificacion->calificacion_1 = null;
                $calificacion->save(); 
            }
            elseif($cal == 2){
                $calificacion->calificacion_2 = null;
                $calificacion->save(); 
            }
            else{
                $calificacion->calificacion_3 = null;
                $calificacion->save(); 
            }
            return response()->json([
                "Status"=> 204,
                 "Msg"=> "Se elimino la calificacion de forma exitosa",
                 "Data"=>$calificacion
            ],204);
        }

        return response()->json([
            "errors"=> $validacion->errors(),
        ],200);
    }

}
