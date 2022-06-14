<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre del país') }}
            {{ Form::text('nombre_pais', $paise->nombre_pais, ['class' => 'form-control' . ($errors->has('nombre_pais') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Pais']) }}
            {!! $errors->first('nombre_pais', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>

        <a class="btn btn-danger" href="{{ route('paises.index') }}"> Atrás</a>
    </div>
</div>