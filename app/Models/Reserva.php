<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reserva';

    protected $fillable = [
        'feligrese_id',
        'sacramento_id',
        'misa_id',
        'fecha_solicitud',
        'estado',
        'comentario'
    ];

    public $timestamps = true;

    public function feligrese()
    {
        return $this->belongsTo(Feligrese::class);
    }

    public function sacramento()
    {
        return $this->belongsTo(Sacramento::class);
    }

    public function misa()
    {
        return $this->belongsTo(Misa::class);
    }
}