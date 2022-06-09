@extends('adminlte::page')

@section('title', 'Países')

@section('content_header')
    <h1>Lista de Países</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Países') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('paises.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    <i class="bi bi-plus-lg"></i> {{ __('Crear Nuevo') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
                                        <th>Nombre País</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paises as $paise)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $paise->nombre_pais }}</td>

                                            <td>
                                                <form action="{{ route('paises.destroy',$paise->id) }}" method="POST" class="formulario_eliminar">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('paises.show',$paise->id) }}"><i class="bi bi-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('paises.edit',$paise->id) }}"><i class="bi bi-pencil"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $paises->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@stop

@section('js')
    <script>
        $('.formulario_eliminar').submit(function(e) {
            e.preventDefault();
            
            Swal.fire({
                title: "Eliminar",
                text: "¿Estas seguro que deseas eliminar?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Sí, eliminar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Eliminado',
                        'La información ha sido eliminada',
                        'Success'
                    )

                    this.submit();
                }
            })
        })
    </script>

    @if (session('editar') == 'editado')
        <script>
            Swal.fire(
                'Actualizado',
                'La información se actualizó con éxito',
                'Success'
            )
            this.submit();
        </script>
    @endif
@stop