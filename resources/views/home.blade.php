@extends('adminlte::page')
<?php
$juegos = \DB::table('games')
->select('games.*')
->orderBy('games.id', 'desc')
->get();

$equipos = \DB::table('teams')
->select('teams.*')
->orderBy('teams.id', 'desc')
->get();
$modos = \DB::table('modes')
->select('modes.*')
->orderBy('modes.id', 'desc')
->get();

$categories = \DB::table('categories')
->select('categories.*')
->orderBy('categories.id', 'desc')
->get();

//LLenar arreglo con los nombres del los juegos para el grafico
$labels = array();
foreach ($juegos as $juego) {
    array_push($labels, $juego->nombre);
}
// Obtener la longitud de la colección
?>

$inscriptionsins = \DB::table('inscriptionsins')
->select('inscriptionsins.*')
->orderBy('inscriptionsins.id', 'desc')
->get();

$inscriptionsgrs = \DB::table('inscriptionsgrs')
->select('inscriptionsgrs.*')
->orderBy('inscriptionsgrs.id', 'desc')
->get();





@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <div class="row gap-4">
            <div class="col-3">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h3 class="card-title">Juegos</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center">{{ count($juegos) }} Registrados</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h3 class="card-title">Equipos</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center">{{ count($equipos) }} Registrados</p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h3 class="card-title">Modos</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center">{{ count($modos) }} Registrados</p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h3 class="card-title">Categorias</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center">{{ count($categories) }} Registrados</p>
                    </div>
                </div>
            </div>
            <div class="col-6 mt-4">
            <h1 class="text-center fs-5">Ultimos Juegos Registrados</h1>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($juegos as $juego)
                        <tr>
                            <th scope="row">{{ $juego->id }}</th>
                            <td>{{ $juego->nombre }}</td>
                            <td>{{ $juego->created_at }}</td>
                            <td>{{ $juego->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        <script type="text/javascript">

  var labels =  {{ Js::from($labels) }};
  var inscripciones_in =  {{ Js::from($inscriptionsins) }};

  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: users,
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

</script>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


