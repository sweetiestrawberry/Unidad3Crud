@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-semibold text-pink-500 mb-6">
    🎓 Lista de Carreras
</h2>

<a href="{{ route('carreras.create') }}"
class="bg-pink-400 hover:bg-pink-500 text-white px-4 py-2 rounded-lg shadow mb-4 inline-block">
    💖 Nueva Carrera
</a>

<div class="bg-white p-4 rounded-xl shadow">
    @if($carreras->isEmpty())
        <p class="text-gray-500">No hay carreras registradas 😢</p>
    @else
        <ul>
            @foreach($carreras as $c)
                <li class="border-b py-2 flex justify-between items-center">

                    <span>
                        {{ $c->nombre }}
                    </span>

                    <div>
                        <!-- EDITAR -->
                        <a href="{{ route('carreras.edit', $c->id) }}"
                           class="text-blue-500 mr-3">
                            Editar
                        </a>

                        <!-- ELIMINAR -->
                        <form action="{{ route('carreras.destroy', $c->id) }}"
                              method="POST"
                              class="inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="text-red-500"
                                    onclick="return confirm('¿Seguro que quieres eliminar esta carrera?')">
                                Eliminar
                            </button>

                        </form>
                    </div>

                </li>
            @endforeach
        </ul>
    @endif
</div>

@endsection