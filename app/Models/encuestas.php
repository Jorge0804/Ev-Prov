<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encuestas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_encuesta';

    function periodo(){
        return $this->hasOne(periodos::class, 'id_periodo', 'id_periodo');
    }

    function proveedor(){
        return $this->hasOne(proveedores::class, 'id_proveedor', 'id_proveedor');
    }
}
