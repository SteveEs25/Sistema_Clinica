@extends('layouts.app')

@section('template_title')
    {{ $inventario->name ?? 'Show Inventario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Bin:</strong>
                            {{ $inventario->bin }}
                        </div>
                        <div class="form-group">
                            <strong>Inventario Disponible:</strong>
                            {{ $inventario->inventario_disponible }}
                        </div>
                        <div class="form-group">
                            <strong>Inventario Existencia:</strong>
                            {{ $inventario->inventario_existencia }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $inventario->producto_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
