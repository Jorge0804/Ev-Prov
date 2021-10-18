<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encuestas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_encuesta';
    public $timestamps = false;

    function periodo(){
        return $this->hasOne(periodos::class, 'id_periodo', 'id_periodo');
    }

    function proveedor(){
        return $this->hasOne(proveedores::class, 'id_proveedor', 'id_proveedor');
    }

    function evaluaciones(){
        return $this->hasMany(evaluaciones::class, 'id_encuesta', 'id_encuesta')->with('detalles');
        //return $this->belongsToMany(encuestas::class,evaluaciones::class,'id_encuesta','id_encuesta');
    }
}
