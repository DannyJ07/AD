@extends('adminlte::page')

@section('template_title')
    {{ $game->name ?? 'Show Game' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Game</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('games.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $game->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Reglas:</strong>
                            {{ $game->reglas }}
                        </div>
                        <div class="form-group">
                            <strong>Aula:</strong>
                            {{ $game->aula }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $game->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Id Categoria:</strong>
                            {{ $game->id_categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
