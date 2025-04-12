@extends('layout')

@section('title', 'Agregar Marca')

@section('content')
<div class="container py-4">
    <h1 class="h3 mb-4">Agregar Marca</h1>
    <form action="{{ route('marcas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('marcas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
