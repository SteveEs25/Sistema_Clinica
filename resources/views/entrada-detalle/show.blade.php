@extends('layouts.app')

@section('template_title')
    {{ $entradaDetalle->name ?? 'Show Entrada Detalle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Entrada Detalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entrada-detalles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Entradacabecera Id:</strong>
                            {{ $entradaDetalle->entradaCabecera_id }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $entradaDetalle->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Pedido:</strong>
                            {{ $entradaDetalle->cantidad_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Entregada:</strong>
                            {{ $entradaDetalle->cantidad_entregada }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Unitario:</strong>
                            {{ $entradaDetalle->precio_unitario }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Total:</strong>
                            {{ $entradaDetalle->precio_total }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Totalpedido:</strong>
                            {{ $entradaDetalle->monto_totalPedido }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Totalentregado:</strong>
                            {{ $entradaDetalle->monto_totalEntregado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $entradaDetalle->fecha_vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Lote:</strong>
                            {{ $entradaDetalle->lote }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
