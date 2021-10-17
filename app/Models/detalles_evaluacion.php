<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalles_evaluacion extends Model
{
    use HasFactory;

    protected $table = 'detalles_evaluacion';
    public $timestamps = false;
    protected $primaryKey = 'id_detalle';

    function evaluacion(){
        return $this->hasOne(evaluaciones::class, 'id_evaluacion', 'id_evaluacion')->with('area');
    }

    function area(){
        return $this->hasOne(areas::class, 'id_area', 'id_area')->with('contacto');
    }

    function factor(){
        return $this->hasOne(factores::class, 'id_factor', 'id_factor');
    }

    function valor(){
        return $this->hasOne(valores::class, 'id_valor', 'id_valor');
    }
}
