<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $inscriptionsgr->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_pag') }}
            {{ Form::text('tipo_pag', $inscriptionsgr->tipo_pag, ['class' => 'form-control' . ($errors->has('tipo_pag') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Pag']) }}
            {!! $errors->first('tipo_pag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doc_pago') }}
            {{ Form::text('doc_pago', $inscriptionsgr->doc_pago, ['class' => 'form-control' . ($errors->has('doc_pago') ? ' is-invalid' : ''), 'placeholder' => 'Doc Pago']) }}
            {!! $errors->first('doc_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $inscriptionsgr->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_juego') }}
            {{ Form::text('id_juego', $inscriptionsgr->id_juego, ['class' => 'form-control' . ($errors->has('id_juego') ? ' is-invalid' : ''), 'placeholder' => 'Id Juego']) }}
            {!! $errors->first('id_juego', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_equipo') }}
            {{ Form::text('id_equipo', $inscriptionsgr->id_equipo, ['class' => 'form-control' . ($errors->has('id_equipo') ? ' is-invalid' : ''), 'placeholder' => 'Id Equipo']) }}
            {!! $errors->first('id_equipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>