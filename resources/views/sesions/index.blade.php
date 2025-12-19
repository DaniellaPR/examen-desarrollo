@extends('layouts.app')
@section('titulo', 'Sesiones')
@section('contenido')
    <h3>Sesiones</h3>
    <div class="table-responsive">
        <table class="table table-sm table-bordered">
            <tr>
                <th>Tipo</th>
                <th>Cliente</th>
                <th>Teléfono</th>
                <th>Ubicación</th>
                <th>Fecha/Hora</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>

            @forelse($sesions as $s)
                <tr>
                    <td>{{ $s->tipo }}</td>
                    <td>{{ $s->cliente }}</td>
                    <td>{{ $s->telefono }}</td>
                    <td>{{ $s->ubicacion }}</td>
                    <td>{{ $s->fecha_hora }}</td>
                    <td>{{ $s->estado }}</td>
                    <td>
                        <a href="{{ route('sesions.edit', $s) }}">Editar</a>

                        <form action="{{ route('sesions.destroy', $s) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No hay sesiones</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
