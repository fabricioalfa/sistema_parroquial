<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misa extends Model
{
    use HasFactory;

    protected $table = 'misa';

    protected $fillable = [
        'fecha',
        'hora',
        'tipo',
        'sacerdote_id',
        'estado'
    ];

    public $timestamps = true;

    public function sacerdote()
    {
        return $this->belongsTo(Sacerdote::class);
    }
}