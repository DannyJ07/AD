<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $mode->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_juego') }}
            {{ Form::text('id_juego', $mode->id_juego, ['class' => 'form-control' . ($errors->has('id_juego') ? ' is-invalid' : ''), 'placeholder' => 'Id Juego']) }}
            {!! $errors->first('id_juego', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>