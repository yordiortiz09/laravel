<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion_Profesor_AlumnoModel extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $fillable = [
        'fk_calificacion',
        'fk_materia',
        'fk_profesor',
        'fk_alumno'   
    ];
    protected $table = 'calificacion_profesor_alumno';
}
