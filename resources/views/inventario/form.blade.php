<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('bin') }}
            {{ Form::text('bin', $inventario->bin, ['class' => 'form-control' . ($errors->has('bin') ? ' is-invalid' : ''), 'placeholder' => 'Bin']) }}
            {!! $errors->first('bin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inventario_disponible') }}
            {{ Form::text('inventario_disponible', $inventario->inventario_disponible, ['class' => 'form-control' . ($errors->has('inventario_disponible') ? ' is-invalid' : ''), 'placeholder' => 'Inventario Disponible']) }}
            {!! $errors->first('inventario_disponible', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inventario_existencia') }}
            {{ Form::text('inventario_existencia', $inventario->inventario_existencia, ['class' => 'form-control' . ($errors->has('inventario_existencia') ? ' is-invalid' : ''), 'placeholder' => 'Inventario Existencia']) }}
            {!! $errors->first('inventario_existencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto_id') }}
            {{ Form::text('producto_id', $inventario->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
            {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>