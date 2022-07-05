<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_producto') }}
            {{ Form::text('nombre_producto', $producto->nombre_producto, ['class' => 'form-control' . ($errors->has('nombre_producto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Producto']) }}
            {!! $errors->first('nombre_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observacion') }}
            {{ Form::text('observacion', $producto->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : ''), 'placeholder' => 'Observacion']) }}
            {!! $errors->first('observacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_comercial') }}
            {{ Form::text('nombre_comercial', $producto->nombre_comercial, ['class' => 'form-control' . ($errors->has('nombre_comercial') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Comercial']) }}
            {!! $errors->first('nombre_comercial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo Producto') }}
            {{ Form::select('tipoProducto_id', $tipoProducto, $producto->tipoProducto_id, ['class' => 'form-control' . ($errors->has('tipoProducto_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el Tipo de Producto']) }}
            {!! $errors->first('tipoProducto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>

        <a class="btn btn-danger" href="{{ route('productos.index') }}"> Atrás</a>
    </div>
</div>