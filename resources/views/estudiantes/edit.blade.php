@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-semibold text-pink-500 mb-6">
    ✏️ Editar Estudiante
</h2>

<form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST"
class="bg-pink-50 p-6 rounded-xl shadow-md">
@csrf
@method('PUT')

<input type="text" name="nombre" value="{{ $estudiante->nombre }}"
class="w-full p-3 border border-pink-200 rounded-lg mb-4">

<input type="email" name="correo" value="{{ $estudiante->correo }}"
class="w-full p-3 border border-pink-200 rounded-lg mb-4">

<button class="bg-pink-400 hover:bg-pink-500 text-white px-6 py-2 rounded-lg">
    💖 Actualizar
</button>

</form>

@endsection