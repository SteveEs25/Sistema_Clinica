@extends('adminlte::page')

@section('title', 'Países')

@section('content_header')
    <h1>Mostrar Países</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Países</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('paises.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre País:</strong>
                            {{ $paise->nombre_pais }}
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