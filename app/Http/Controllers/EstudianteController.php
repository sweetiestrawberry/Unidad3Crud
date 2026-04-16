<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Carrera;

class EstudianteController extends Controller
{
    // Mostrar lista
    public function index()
    {
        $estudiantes = Estudiante::with('carrera')->get();
        return view('estudiantes.index', compact('estudiantes'));
    }

    // Formulario crear (🔥 AQUÍ va lo que preguntaste)
    public function create()
    {
        $carreras = Carrera::all();
        return view('estudiantes.create', compact('carreras'));
    }

    // Guardar estudiante
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'carrera_id' => 'required',
            'semestre' => 'required|integer'
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiantes.index')
                         ->with('success', '💖 Estudiante registrado');
    }

    // Formulario editar
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $carreras = Carrera::all();

        return view('estudiantes.edit', compact('estudiante', 'carreras'));
    }

    // Actualizar
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'carrera_id' => 'required',
            'semestre' => 'required|integer'
        ]);

        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index')
                         ->with('success', '✨ Estudiante actualizado');
    }

    // Eliminar
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        return redirect()->route('estudiantes.index')
                         ->with('success', '🗑️ Estudiante eliminado');
    }
}