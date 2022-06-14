<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('direccion_entrega') }}
            {{ Form::text('direccion_entrega', $entradaCabecera->direccion_entrega, ['class' => 'form-control' . ($errors->has('direccion_entrega') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Entrega']) }}
            {!! $errors->first('direccion_entrega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_pedido') }}
            {{ Form::text('fecha_pedido', $entradaCabecera->fecha_pedido, ['class' => 'form-control' . ($errors->has('fecha_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Pedido']) }}
            {!! $errors->first('fecha_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_recibido') }}
            {{ Form::text('fecha_recibido', $entradaCabecera->fecha_recibido, ['class' => 'form-control' . ($errors->has('fecha_recibido') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Recibido']) }}
            {!! $errors->first('fecha_recibido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_factura') }}
            {{ Form::text('numero_factura', $entradaCabecera->numero_factura, ['class' => 'form-control' . ($errors->has('numero_factura') ? ' is-invalid' : ''), 'placeholder' => 'Numero Factura']) }}
            {!! $errors->first('numero_factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Proveedor') }}
            {{ Form::select('proveedor_id', $proveedore, $entradaCabecera->proveedor_id, ['class' => 'form-control' . ($errors->has('proveedor_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un Proveedor']) }}
            {!! $errors->first('proveedor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo Documento') }}
            {{ Form::select('documento_id', $tipoDocumento, $entradaCabecera->documento_id, ['class' => 'form-control' . ($errors->has('documento_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el Tipo de Documento']) }}
            {!! $errors->first('documento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo Documento') }}
            {{ Form::select('documento_id', $tipoDocumento, $entradaCabecera->documento_id, ['class' => 'form-control' . ($errors->has('documento_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el Tipo de Documento']) }}
            {!! $errors->first('documento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>

        <a class="btn btn-danger" href="{{ route('entrada-cabeceras.index') }}"> Atrás</a>
    </div>
</div>