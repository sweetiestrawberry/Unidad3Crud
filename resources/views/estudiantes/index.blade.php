@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-semibold text-pink-500 mb-6">
    ✨ Lista de Estudiantes ✨
</h2>

<a href="{{ route('estudiantes.create') }}"
class="bg-pink-400 hover:bg-pink-500 text-white px-4 py-2 rounded-lg shadow mb-4 inline-block">
    💖 Nuevo Estudiante
</a>

<div class="overflow-x-auto">
<table class="w-full bg-white rounded-xl overflow-hidden shadow">
    <thead class="bg-pink-200 text-pink-800">
        <tr>
            <th class="p-3">ID</th>
            <th class="p-3">Nombre</th>
            <th class="p-3">Correo</th>
            <th class="p-3">Carrera</th>
            <th class="p-3">Semestre</th>
            <th class="p-3">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($estudiantes as $e)
        <tr class="text-center border-b hover:bg-pink-50">
            <td class="p-2">{{ $e->id }}</td>
            <td>{{ $e->nombre }}</td>
            <td>{{ $e->correo }}</td>
            <td>{{ $e->carrera->nombre ?? '' }}</td>
            <td>{{ $e->semestre }}</td>

            <td class="space-x-2">
                <a href="{{ route('estudiantes.edit', $e->id) }}"
                class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">
                    ✏️
                </a>

                <form id="form-eliminar-estudiante-{{ $e->id }}"
                action="{{ route('estudiantes.destroy', $e->id) }}"
                method="POST" class="inline">
                    @csrf
                    @method('DELETE')

                    <button type="button"
                    onclick="confirmarEliminacion({{ $e->id }}, 'estudiante')"
                    class="bg-pink-500 hover:bg-pink-600 text-white px-3 py-1 rounded">
                        🗑️
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection