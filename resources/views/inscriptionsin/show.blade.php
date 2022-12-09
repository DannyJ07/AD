@extends('adminlte::page')

@section('template_title')
    {{ $inscriptionsin->name ?? 'Show Inscriptionsin' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inscriptionsin</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inscriptionsins.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $inscriptionsin->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Pag:</strong>
                            {{ $inscriptionsin->tipo_pag }}
                        </div>
                        <div class="form-group">
                            <strong>Doc Pago:</strong>
                            {{ $inscriptionsin->doc_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $inscriptionsin->total }}
                        </div>
                        <div class="form-group">
                            <strong>Id Juego:</strong>
                            {{ $inscriptionsin->id_juego }}
                        </div>
                        <div class="form-group">
                            <strong>Id Participante:</strong>
                            {{ $inscriptionsin->id_participante }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
