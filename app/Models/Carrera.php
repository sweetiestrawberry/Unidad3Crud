<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Estudiante;

class Carrera extends Model
{
    // Permitir asignación masiva del campo 'nombre'
    protected $fillable = ['nombre'];

    // Relación con estudiantes
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }
}