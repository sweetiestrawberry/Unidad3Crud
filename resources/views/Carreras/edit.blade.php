@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-semibold text-pink-500 mb-6">
    ✏️ Editar Carrera
</h2>

<form action="{{ route('carreras.update', $carrera->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nombre" value="{{ $carrera->nombre }}"
           class="border p-2 rounded w-full mb-4">

    <button type="submit"
            class="bg-pink-400 hover:bg-pink-500 text-white px-4 py-2 rounded">
        Actualizar
    </button>

</form>

@endsection