<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    protected $fillable = [
        'tipo',
        'cliente',
        'telefono',
        'ubicacion',
        'fecha_hora',
        'estado'
    ];
}
