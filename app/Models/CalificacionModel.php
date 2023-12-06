<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalificacionModel extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $fillable = [
        'calificacion_1',
        'calificacion_2',
        'calificacion_3'   
    ];
    protected $table = 'calificacion';
}
