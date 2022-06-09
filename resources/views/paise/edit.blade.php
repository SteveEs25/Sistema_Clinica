@extends('adminlte::page')

@section('title', 'Países')

@section('content_header')
    <h1>Editar País</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar País</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('paises.update', $paise->id) }}"  role="form" enctype="multipart/form-data" class="formulario_editar">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('paise.form')

                        </form>
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
    <script></script>
@stop