@extends('layouts.app')
@section('titulo', 'Editar Sesión')

@section('contenido')
    <h3>Editar Sesión</h3>

    <form action="{{ route('sesions.update', $sesion) }}" method="POST">
        @csrf
        @method('PUT')
        <p><b>Tipo *</b></p>
        <select name="tipo" class="form-select form-select-sm" required>
            <option value="">-- elegir --</option>
            <option value="Boda" @selected(old('tipo', $sesion->tipo) == 'Boda')>Boda</option>
            <option value="Quinceañera" @selected(old('tipo', $sesion->tipo) == 'Quinceañera')>Quinceañera</option>
            <option value="Bebé" @selected(old('tipo', $sesion->tipo) == 'Bebé')>Bebé</option>
            <option value="Otro" @selected(old('tipo', $sesion->tipo) == 'Otro')>Otro</option>
        </select>

        <p class="mt-3"><b>Cliente *</b></p>
        <input type="text" name="cliente" class="form-control form-control-sm"
               value="{{ old('cliente', $sesion->cliente) }}" required>

        <p class="mt-3"><b>Teléfono *</b></p>
        <input type="text" name="telefono" class="form-control form-control-sm"
               value="{{ old('telefono', $sesion->telefono) }}" required>

        <p class="mt-3"><b>Ubicación *</b></p>
        <input type="text" name="ubicacion" class="form-control form-control-sm"
               value="{{ old('ubicacion', $sesion->ubicacion) }}" required>

        <p class="mt-3"><b>Fecha y hora *</b></p>
        <input type="datetime-local" name="fecha_hora" class="form-control form-control-sm"
               value="{{ old('fecha_hora', \Carbon\Carbon::parse($sesion->fecha_hora)->format('Y-m-d\TH:i')) }}" required>

        <p class="mt-3"><b>Estado *</b></p>
        <select name="estado" class="form-select form-select-sm" required>
            <option value="agendada" @selected(old('estado', $sesion->estado) == 'agendada')>agendada</option>
            <option value="realizada" @selected(old('estado', $sesion->estado) == 'realizada')>realizada</option>
            <option value="fotos_entregadas" @selected(old('estado', $sesion->estado) == 'fotos_entregadas')>fotos_entregadas</option>
            <option value="cancelada" @selected(old('estado', $sesion->estado) == 'cancelada')>cancelada</option>
        </select>
        <div class="mt-4">
            <a href="{{ route('sesions.index') }}" class="btn btn-secondary btn-sm">Volver</a>
            <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
        </div>
    </form>
@endsection
