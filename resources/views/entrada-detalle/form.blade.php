<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('entradaCabecera_id') }}
            {{ Form::text('entradaCabecera_id', $entradaDetalle->entradaCabecera_id, ['class' => 'form-control' . ($errors->has('entradaCabecera_id') ? ' is-invalid' : ''), 'placeholder' => 'Entradacabecera Id']) }}
            {!! $errors->first('entradaCabecera_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto_id') }}
            {{ Form::text('producto_id', $entradaDetalle->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
            {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_pedido') }}
            {{ Form::text('cantidad_pedido', $entradaDetalle->cantidad_pedido, ['class' => 'form-control' . ($errors->has('cantidad_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Pedido']) }}
            {!! $errors->first('cantidad_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_entregada') }}
            {{ Form::text('cantidad_entregada', $entradaDetalle->cantidad_entregada, ['class' => 'form-control' . ($errors->has('cantidad_entregada') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Entregada']) }}
            {!! $errors->first('cantidad_entregada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_unitario') }}
            {{ Form::text('precio_unitario', $entradaDetalle->precio_unitario, ['class' => 'form-control' . ($errors->has('precio_unitario') ? ' is-invalid' : ''), 'placeholder' => 'Precio Unitario']) }}
            {!! $errors->first('precio_unitario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_total') }}
            {{ Form::text('precio_total', $entradaDetalle->precio_total, ['class' => 'form-control' . ($errors->has('precio_total') ? ' is-invalid' : ''), 'placeholder' => 'Precio Total']) }}
            {!! $errors->first('precio_total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto_totalPedido') }}
            {{ Form::text('monto_totalPedido', $entradaDetalle->monto_totalPedido, ['class' => 'form-control' . ($errors->has('monto_totalPedido') ? ' is-invalid' : ''), 'placeholder' => 'Monto Totalpedido']) }}
            {!! $errors->first('monto_totalPedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto_totalEntregado') }}
            {{ Form::text('monto_totalEntregado', $entradaDetalle->monto_totalEntregado, ['class' => 'form-control' . ($errors->has('monto_totalEntregado') ? ' is-invalid' : ''), 'placeholder' => 'Monto Totalentregado']) }}
            {!! $errors->first('monto_totalEntregado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_vencimiento') }}
            {{ Form::text('fecha_vencimiento', $entradaDetalle->fecha_vencimiento, ['class' => 'form-control' . ($errors->has('fecha_vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Vencimiento']) }}
            {!! $errors->first('fecha_vencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lote') }}
            {{ Form::text('lote', $entradaDetalle->lote, ['class' => 'form-control' . ($errors->has('lote') ? ' is-invalid' : ''), 'placeholder' => 'Lote']) }}
            {!! $errors->first('lote', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>