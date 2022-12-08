<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $inscriptionsin->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_pag') }}
            {{ Form::text('tipo_pag', $inscriptionsin->tipo_pag, ['class' => 'form-control' . ($errors->has('tipo_pag') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Pag']) }}
            {!! $errors->first('tipo_pag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doc_pago') }}
            {{ Form::text('doc_pago', $inscriptionsin->doc_pago, ['class' => 'form-control' . ($errors->has('doc_pago') ? ' is-invalid' : ''), 'placeholder' => 'Doc Pago']) }}
            {!! $errors->first('doc_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $inscriptionsin->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_juego') }}
            {{ Form::text('id_juego', $inscriptionsin->id_juego, ['class' => 'form-control' . ($errors->has('id_juego') ? ' is-invalid' : ''), 'placeholder' => 'Id Juego']) }}
            {!! $errors->first('id_juego', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_participante') }}
            {{ Form::text('id_participante', $inscriptionsin->id_participante, ['class' => 'form-control' . ($errors->has('id_participante') ? ' is-invalid' : ''), 'placeholder' => 'Id Participante']) }}
            {!! $errors->first('id_participante', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>