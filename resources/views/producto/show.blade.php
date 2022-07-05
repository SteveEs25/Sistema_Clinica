@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Mostrar Producto</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('productos.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $producto->nombre_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $producto->observacion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Comercial:</strong>
                            {{ $producto->nombre_comercial }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Producto:</strong>
                            {{ $producto->tipoProducto->nombre_tipoProducto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
