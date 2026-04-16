@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-semibold text-pink-500 mb-6">
    🎓 Registrar Carrera
</h2>

@if($errors->any())
    <div class="bg-pink-200 text-pink-800 p-4 mb-4 rounded">
        @foreach($errors->all() as $error)
            <p>• {{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ route('carreras.store') }}" method="POST"
class="bg-pink-50 p-6 rounded-xl shadow-md">
@csrf

<div class="mb-4">
    <label>Nombre de la Carrera</label>
    <input type="text" name="nombre"
    class="w-full p-3 border border-pink-200 rounded-lg focus:ring-2 focus:ring-pink-300">
</div>

<div class="flex gap-3 mt-4">
    <button class="bg-pink-400 hover:bg-pink-500 text-white px-6 py-2 rounded-lg">
        💖 Guardar
    </button>

    <a href="{{ route('carreras.index') }}"
       class="bg-gray-300 hover:bg-gray-400 px-6 py-2 rounded-lg">
        Cancelar
    </a>
</div>

</form>

@endsection