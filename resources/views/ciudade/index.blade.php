@extends('adminlte::page')

@section('title', 'Ciudades')

@section('content_header')
    <h1>Lista de Ciudades</h1>
@stop

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ciudades') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('ciudades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover" id="myTable"> 
                                <thead class="thead">
                                    <tr style="background-color: #337ab7; color:#fff;">
                                        <th>No</th>
                                        
                                        <th>Nombre Ciudad</th>
                                        <th>País</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ciudades as $ciudade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $ciudade->nombre_ciudad }}</td>
                                            <td>{{ $ciudade->paise->nombre_pais }}</td>

                                            <td>
                                                <form action="{{ route('ciudades.destroy',$ciudade->id) }}" method="POST" class="formulario_eliminar">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ciudades.show',$ciudade->id) }}"><i class="bi bi-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ciudades.edit',$ciudade->id) }}"><i class="bi bi-pencil"></i></a>
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
                {!! $ciudades->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css"/> 
@stop

@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <script>
        //Alerta para despues de Guardar
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
            //Alerta para despues de editar
            Swal.fire(
                'Actualizado',
                'La información se actualizó con éxito',
                'Success'
            )
            this.submit();
        </script>
    @endif


    
    <script>
        //Botones para generar archivos externos
        $(document).ready( function () {
            $('#myTable').DataTable({
                responsive: "true",
                dom: 'Bfrtilp',
                buttons:[
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fas fa-file-pdf"></i>',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-danger'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i>',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-info'
                    },
                ]
            });
        });
    </script>
@stop