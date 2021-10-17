<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_area';

    function contacto(){
        return $this->hasOne(contactos::class, 'id_contacto', 'id_contacto');
    }

    function user(){
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
