@extends('layout')

@section('title', 'Agregar Camión')

@section('content')
<div class="container py-4">
    <h1 class="h3 mb-4">Agregar Camión</h1>
    <form action="{{ route('camiones.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" name="placa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="codigo_interno" class="form-label">Código Interno</label>
            <input type="text" name="codigo_interno" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_transporte" class="form-label">Transporte</label>
            <select name="id_transporte" class="form-select">
                @foreach ($transportes as $transporte)
                    <option value="{{ $transporte->id_transporte }}">{{ $transporte->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_marca" class="form-label">Marca</label>
            <select name="id_marca" class="form-select">
                @foreach ($marcas as $marca)
                    <option value="{{ $marca->id_marca }}">{{ $marca->descripcion }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input type="text" name="color" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" name="modelo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="capacidad_toneladas" class="form-label">Capacidad (toneladas)</label>
            <input type="number" name="capacidad_toneladas" step="0.01" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('camiones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
