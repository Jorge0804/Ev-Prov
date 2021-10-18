<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluaciones extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_evaluacion';
    public $timestamps = false;

    function factores(){
        return $this->belongsToMany(factores::class, 'detalles_evaluacion','id_factor', 'id_evaluacion');
    }

    function area(){
        return $this->hasOne(areas::class, 'id_area', 'id_area')->with('contacto');
    }

    function detalles(){
        return $this->hasMany(detalles_evaluacion::class, 'id_evaluacion', 'id_evaluacion')->with('valor')->with('factor');
        //return $this->belongsToMany(detalles_evaluacion::class, evaluaciones::class, 'id_evaluacion', 'id_evaluacion');
    }

    function encuesta(){
        return $this->hasOne(encuestas::class, 'id_encuesta', 'id_encuesta')->with('proveedor');
    }
}
