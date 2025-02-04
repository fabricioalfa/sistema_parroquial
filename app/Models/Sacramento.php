<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sacramento extends Model
{
    use HasFactory;

    protected $table = 'sacramento';

    protected $fillable = [
        'nombre',
        'requiere_certificado',
        'costo'
    ];

    public $timestamps = true;
}
