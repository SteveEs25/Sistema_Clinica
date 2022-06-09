<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_ciudad') }}
            {{ Form::text('nombre_ciudad', $ciudade->nombre_ciudad, ['class' => 'form-control' . ($errors->has('nombre_ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Ciudad']) }}
            {!! $errors->first('nombre_ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('País') }}
            {{ Form::select('pais_id', $paise, $ciudade->pais_id, ['class' => 'form-control' . ($errors->has('pais_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un País']) }}
            {!! $errors->first('pais_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>

        <a class="btn btn-danger" href="{{ route('ciudades.index') }}"> Atrás</a>
    </div>
</div>