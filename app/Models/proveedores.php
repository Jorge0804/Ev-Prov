<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_proveedor';

    function contacto(){
        return $this->hasOne(contactos::class, 'id_contacto', 'id_contacto');
    }
}
