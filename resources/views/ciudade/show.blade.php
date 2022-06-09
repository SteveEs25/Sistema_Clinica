@extends('adminlte::page')

@section('title', 'Ciudades')

@section('content_header')
    <h1>Mostrar Ciudades</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Ciudades</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('ciudades.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Ciudad:</strong>
                            {{ $ciudade->nombre_ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre País:</strong>
                            {{ $ciudade->paise->nombre_pais }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop