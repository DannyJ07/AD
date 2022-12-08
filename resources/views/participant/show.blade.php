@extends('layouts.app')

@section('template_title')
    {{ $participant->name ?? 'Show Participant' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Participant</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('participants.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $participant->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $participant->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $participant->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $participant->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $participant->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Id Equipo:</strong>
                            {{ $participant->id_equipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection