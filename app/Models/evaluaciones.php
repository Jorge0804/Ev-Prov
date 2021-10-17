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
}
