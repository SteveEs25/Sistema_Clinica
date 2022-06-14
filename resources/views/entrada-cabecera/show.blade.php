@extends('adminlte::page')

@section('title', 'Entradas')

@section('content_header')
    <h1>Mostrar Entrada</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Entrada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('entrada-cabeceras.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Direccion Entrega:</strong>
                            {{ $entradaCabecera->direccion_entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Pedido:</strong>
                            {{ $entradaCabecera->fecha_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Recibido:</strong>
                            {{ $entradaCabecera->fecha_recibido }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Factura:</strong>
                            {{ $entradaCabecera->numero_factura }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $entradaCabecera->proveedor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Documento:</strong>
                            {{ $entradaCabecera->documento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $entradaCabecera->estado_id }}
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
