@extends('layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Panel de Control</h1>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-shopping-cart fa-2x text-primary mb-3"></i>
                        <h5 class="card-title">Ventas Hoy</h5>
                        <p class="text-muted">120 ventas</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-store fa-2x text-success mb-3"></i>
                        <h5 class="card-title">Tiendas Activas</h5>
                        <p class="text-muted">8 tiendas</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-users fa-2x text-warning mb-3"></i>
                        <h5 class="card-title">Clientes Registrados</h5>
                        <p class="text-muted">1,542 usuarios</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-money-bill-wave fa-2x text-purple mb-3"></i>
                        <h5 class="card-title">Ingresos Hoy</h5>
                        <p class="text-muted">$5,430.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-truck-fast fa-2x text-danger mb-3"></i>
                        <h5 class="card-title">Órdenes Enviadas</h5>
                        <p class="text-muted">75 pedidos</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-tags fa-2x text-info mb-3"></i>
                        <h5 class="card-title">Productos en Oferta</h5>
                        <p class="text-muted">23 productos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
