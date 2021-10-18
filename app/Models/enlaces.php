<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enlaces extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'id_enlace';

    function evaluacion(){
        return $this->hasOne(evaluaciones::class, 'id_evaluacion', 'id_evaluacion')->with('area')->with('encuesta');
    }
}
