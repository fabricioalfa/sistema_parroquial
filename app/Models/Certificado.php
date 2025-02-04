<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;

    protected $table = 'certificado';

    protected $fillable = [
        'sacramento_id',
        'fecha_emision',
        'tipo_servicio',
        'detalles_adicionales'
    ];

    public $timestamps = true;

    public function sacramento()
    {
        return $this->belongsTo(Sacramento::class);
    }
}