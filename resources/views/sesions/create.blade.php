@extends('layouts.app')
@section('titulo', 'Nueva Sesión')

@section('contenido')
    <h3>Nueva Sesión</h3>

    <form action="{{ route('sesions.store') }}" method="POST">
        @csrf
        <p><b>Tipo *</b></p>
        <select name="tipo" required>
            <option value="">-- elegir --</option>
            <option value="Boda" @selected(old('tipo')=='Boda')>Boda</option>
            <option value="Quinceañera" @selected(old('tipo')=='Quinceañera')>Quinceañera</option>
            <option value="Bebé" @selected(old('tipo')=='Bebé')>Bebé</option>
            <option value="Otro" @selected(old('tipo')=='Otro')>Otro</option>
        </select>

        <p><b>Cliente *</b></p>
        <input type="text" name="cliente" value="{{ old('cliente') }}" required>

        <p><b>Teléfono *</b></p>
        <input type="text" name="telefono" value="{{ old('telefono') }}" required>

        <p><b>Ubicación *</b></p>
        <input type="text" name="ubicacion" value="{{ old('ubicacion') }}" required>

        <p><b>Fecha y hora *</b></p>
        <input type="datetime-local" name="fecha_hora" value="{{ old('fecha_hora') }}" required>

        <br><br>
        <a href="{{ route('sesions.index') }}">Cancelar</a>
        <button type="submit">Guardar</button>
    </form>
@endsection
