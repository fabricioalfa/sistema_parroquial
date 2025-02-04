<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sacerdote extends Model
{
    use HasFactory;

    protected $table = 'sacerdote';

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'correo'
    ];

    public $timestamps = true;
}