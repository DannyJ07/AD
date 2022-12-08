@extends('layouts.app')

@section('template_title')
    {{ $inscriptionsgr->name ?? 'Show Inscriptionsgr' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inscriptionsgr</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inscriptionsgrs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $inscriptionsgr->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Pag:</strong>
                            {{ $inscriptionsgr->tipo_pag }}
                        </div>
                        <div class="form-group">
                            <strong>Doc Pago:</strong>
                            {{ $inscriptionsgr->doc_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $inscriptionsgr->total }}
                        </div>
                        <div class="form-group">
                            <strong>Id Juego:</strong>
                            {{ $inscriptionsgr->id_juego }}
                        </div>
                        <div class="form-group">
                            <strong>Id Equipo:</strong>
                            {{ $inscriptionsgr->id_equipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
