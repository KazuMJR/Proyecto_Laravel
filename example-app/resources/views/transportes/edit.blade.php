@extends('layout')

@section('title', 'Editar Transporte')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Editar Transporte</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('transportes.update', $transporte) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" name="codigo" id="codigo" class="form-control" value="{{ old('codigo', $transporte->codigo) }}" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $transporte->nombre) }}" required>
        </div>
        <div class="mb-3">
            <label for="razon_social" class="form-label">Razón Social</label>
            <input type="text" name="razon_social" id="razon_social" class="form-control" value="{{ old('razon_social', $transporte->razon_social) }}" required>
        </div>

        <button type="submit" class="btn btn-warning">Actualizar</button>
        <a href="{{ route('transportes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
