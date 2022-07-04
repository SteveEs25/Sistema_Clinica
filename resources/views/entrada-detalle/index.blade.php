@extends('layouts.app')

@section('template_title')
    Entrada Detalle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Entrada Detalle') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('entrada-detalles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Entradacabecera Id</th>
										<th>Producto Id</th>
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
                                            
											<td>{{ $entradaDetalle->entradaCabecera_id }}</td>
											<td>{{ $entradaDetalle->producto_id }}</td>
											<td>{{ $entradaDetalle->cantidad_pedido }}</td>
											<td>{{ $entradaDetalle->cantidad_entregada }}</td>
											<td>{{ $entradaDetalle->precio_unitario }}</td>
											<td>{{ $entradaDetalle->precio_total }}</td>
											<td>{{ $entradaDetalle->monto_totalPedido }}</td>
											<td>{{ $entradaDetalle->monto_totalEntregado }}</td>
											<td>{{ $entradaDetalle->fecha_vencimiento }}</td>
											<td>{{ $entradaDetalle->lote }}</td>

                                            <td>
                                                <form action="{{ route('entrada-detalles.destroy',$entradaDetalle->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('entrada-detalles.show',$entradaDetalle->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('entrada-detalles.edit',$entradaDetalle->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
