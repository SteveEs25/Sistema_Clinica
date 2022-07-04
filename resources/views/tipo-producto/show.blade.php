@extends('layouts.app')

@section('template_title')
    {{ $tipoProducto->name ?? 'Show Tipo Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipo Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Tipoproducto:</strong>
                            {{ $tipoProducto->nombre_tipoProducto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
