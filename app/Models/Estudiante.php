<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;

class Estudiante extends Model
{
    protected $fillable = [
        'nombre',
        'correo',
        'carrera_id',
        'semestre'
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}