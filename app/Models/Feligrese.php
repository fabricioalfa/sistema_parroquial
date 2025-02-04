<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feligrese extends Model
{
    use HasFactory;

    protected $table = 'feligrese';

    protected $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'correo',
        'fecha_nacimiento'
    ];

    public $timestamps = true;
}
