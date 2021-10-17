<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordenes extends Model
{
    use HasFactory;

    public $timestamps = false;

    function proveedor(){
        return $this->hasOne(proveedores::class, 'id_proveedor', 'id_proveedor');
    }

    function periodo(){
        return $this->hasOne(periodos::class, 'id_periodo', 'id_periodo');
    }

    function area(){
        return $this->hasOne(areas::class, 'id_area', 'id_area')->with('user')->with('contacto');
    }
}
