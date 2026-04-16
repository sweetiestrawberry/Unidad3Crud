@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-semibold text-pink-500 mb-6">
    ✨ Registrar Estudiante ✨
</h2>

<form action="{{ route('estudiantes.store') }}" method="POST"
class="bg-pink-50 p-6 rounded-xl shadow-md">
@csrf

<div class="mb-4">
    <label>Nombre</label>
    <input type="text" name="nombre"
    class="w-full p-3 border border-pink-200 rounded-lg focus:ring-2 focus:ring-pink-300">
</div>

<div class="mb-4">
    <label>Correo</label>
    <input type="email" name="correo"
    class="w-full p-3 border border-pink-200 rounded-lg focus:ring-2 focus:ring-pink-300">
</div>

<div class="mb-4">
    <label>Carrera</label>
    <select name="carrera_id"
    class="w-full p-3 border border-pink-200 rounded-lg focus:ring-2 focus:ring-pink-300">
        @foreach($carreras as $c)
            <option value="{{ $c->id }}">{{ $c->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="mb-4">
    <label>Semestre</label>
    <input type="number" name="semestre"
    class="w-full p-3 border border-pink-200 rounded-lg focus:ring-2 focus:ring-pink-300">
</div>

<div class="flex gap-3 mt-4">
    <button class="bg-pink-400 hover:bg-pink-500 text-white px-6 py-2 rounded-lg shadow">
        💖 Guardar
    </button>

    <a href="{{ route('estudiantes.index') }}"
       class="bg-gray-300 hover:bg-gray-400 px-6 py-2 rounded-lg">
        Cancelar
    </a>
</div>

</form>

@endsection