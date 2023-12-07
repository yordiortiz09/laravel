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
    public function VerCalificaciones(){
        $calificaciones = DB::table('calificacion')
        ->join('calificacion_profesor_alumno', 'calificacion.id', '=', 'calificacion_profesor_alumno.fk_calificacion')
        ->select('calificacion.*', 'calificacion_profesor_alumno.fk_materia', 'calificacion_profesor_alumno.fk_profesor', 'calificacion_profesor_alumno.fk_alumno')
        ->get();
        return response()->json([
            "data"=> $calificaciones
        ],200);

    }

    
    public function InsertarCalificaciones(Request $request){
        $validacion = Validator::make($request->all(), [
            'calificacion_1' => 'required|integer',
            'calificacion_2' => 'required|integer',
            'calificacion_3' => 'required|integer',
            'fk_materia' => 'required|integer',
            'fk_profesor' => 'required|integer',
            'fk_alumno' => 'required|integer',
        ]);
    
        if (!$validacion->fails()) {
            $calificacion = new Calificacion();
            $calificacion->calificacion_1 = $request->calificacion_1;
            $calificacion->calificacion_2 = $request->calificacion_2;
            $calificacion->calificacion_3 = $request->calificacion_3;
            $calificacion->save();
    
            $calificacion_profesor_alumno = new CAP();
            $calificacion_profesor_alumno->fk_calificacion = $calificacion->id;
            $calificacion_profesor_alumno->fk_materia = $request->fk_materia;
            $calificacion_profesor_alumno->fk_profesor = $request->fk_profesor;
            $calificacion_profesor_alumno->fk_alumno = $request->fk_alumno;
            $calificacion_profesor_alumno->save();
    
            return response()->json([
                "Status" => 201,
                "Msg" => "Los datos se guardaron de forma exitosa",
                "Data" => $calificacion
            ], 201);
        }
    
        return response()->json([
            "errors" => $validacion->errors(),
        ], 400);
    }
    

    public function ModificarCalificacion(int $cal){
        $validacion=Validator::make($request->all(),[
            'idCalificacion' =>'Required|Integer',
            'calificacion' =>'Required|Integer',
        ]);
        
        if(!$validacion->fails()){

            $calificacion = Calificacion::find($request->idCalificacion);
            if($cal == 1){
                $calificacion->calificacion_1 = $request->calificacion;
                $calificacion->save(); 
            }
            elseif($cal == 2){
                $calificacion->calificacion_2 = $request->calificacion;
                $calificacion->save(); 
            }
            else{
                $calificacion->calificacion_3 = $request->calificacion;
                $calificacion->save(); 
            }
            return response()->json([
                "Status"=> 204,
                 "Msg"=> "Los datos se cambiaron de forma exitosa",
                 "Data"=>$calificacion
            ],204);
            
        }

        return response()->json([
            "errors"=> $validacion->errors(),
        ],200);
    }

    public function EliminarCalificacion(int $cal){
        $validacion=Validator::make($request->all(),[
            'idCalificacion' =>'Required|Integer',
        ]);
        
        if(!$validacion->fails()){
            $calificacion = Calificacion::find($request->idCalificacion);
            if($cal == 1){
                $calificacion->calificacion_1 = 0;
                $calificacion->save(); 
            }
            elseif($cal == 2){
                $calificacion->calificacion_2 = 0;
                $calificacion->save(); 
            }
            else{
                $calificacion->calificacion_3 = 0;
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
