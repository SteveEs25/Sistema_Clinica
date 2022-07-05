@extends('adminlte::page')

@section('title', 'Bodega')

@section('content_header')
    <h1>Bodega</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Bodega') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('entrada-detalles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    <tr>
                                        <th>No</th>
                                        
										<th>Número de Factura</th>
										<th>Nombre del Producto</th>
										<th>Cantidad Pedido</th>
										<th>Cantidad Entregada</th>
										<th>Precio Unitario</th>
										<th>Precio Total</th>
										<th>Monto Totalpedido</th>
										<th>Monto Totalentregado</th>
										<th>Fecha Vencimiento</th>
										<th>Lote</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entradaDetalles as $entradaDetalle)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $entradaDetalle->entradaCabecera->numero_factura }}</td>
											<td>{{ $entradaDetalle->producto->nombre_producto }}</td>
											<td>{{ $entradaDetalle->cantidad_pedido }}</td>
											<td>{{ $entradaDetalle->cantidad_entregada }}</td>
											<td>{{ $entradaDetalle->precio_unitario }}</td>
											<td>{{ $entradaDetalle->precio_total }}</td>
											<td>{{ $entradaDetalle->monto_totalPedido }}</td>
											<td>{{ $entradaDetalle->monto_totalEntregado }}</td>
											<td>{{ $entradaDetalle->fecha_vencimiento }}</td>
											<td>{{ $entradaDetalle->lote }}</td>

                                            <td>
                                                <form action="{{ route('entrada-detalles.destroy',$entradaDetalle->id) }}" method="POST" class="formulario_eliminar">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('entrada-detalles.show',$entradaDetalle->id) }}"><i class="bi bi-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('entrada-detalles.edit',$entradaDetalle->id) }}"><i class="bi bi-pencil"></i></a>
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
                {!! $entradaDetalles->links() !!}
            </div>
        </div>
    </div>
@endsection

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
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
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


