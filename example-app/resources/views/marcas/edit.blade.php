@extends('layout')

@section('title', 'Editar Marca')

@section('content')
<div class="container py-4">
    <h1 class="h3 mb-4">Editar Marca</h1>
    <form action="{{ route('marcas.update', $marca->id_marca) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ $marca->descripcion }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('marcas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
