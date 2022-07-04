<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_tipoProducto') }}
            {{ Form::text('nombre_tipoProducto', $tipoProducto->nombre_tipoProducto, ['class' => 'form-control' . ($errors->has('nombre_tipoProducto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tipoproducto']) }}
            {!! $errors->first('nombre_tipoProducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>