@extends('adminlte::page')

@section('title', 'Entradas')

@section('content_header')
    <h1>Crear Entrada</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Entrada</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('entrada-cabeceras.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('entrada-cabecera.form')

                        </form>
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
    @if (session('crear') == 'creado')
        <script>
            Swal.fire(
                'Guardado',
                'La información se guardo con éxito',
                'Success'
            )
            this.submit();
        </script>
    @endif
@stop

