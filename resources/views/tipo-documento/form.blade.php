<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_tipoDocumento') }}
            {{ Form::text('nombre_tipoDocumento', $tipoDocumento->nombre_tipoDocumento, ['class' => 'form-control' . ($errors->has('nombre_tipoDocumento') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tipodocumento']) }}
            {!! $errors->first('nombre_tipoDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>