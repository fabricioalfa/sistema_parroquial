<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    protected $table = 'ingreso';

    protected $fillable = [
        'fecha',
        'monto',
        'concepto',
        'reserva_id'
    ];

    public $timestamps = true;

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
}