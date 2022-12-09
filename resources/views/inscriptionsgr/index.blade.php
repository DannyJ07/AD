@extends('adminlte::page')

@section('template_title')
    Inscriptionsgr
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inscriptionsgr') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inscriptionsgrs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Fecha</th>
										<th>Tipo Pag</th>
										<th>Doc Pago</th>
										<th>Total</th>
										<th>Id Juego</th>
										<th>Id Equipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscriptionsgrs as $inscriptionsgr)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $inscriptionsgr->fecha }}</td>
											<td>{{ $inscriptionsgr->tipo_pag }}</td>
											<td>{{ $inscriptionsgr->doc_pago }}</td>
											<td>{{ $inscriptionsgr->total }}</td>
											<td>{{ $inscriptionsgr->id_juego }}</td>
											<td>{{ $inscriptionsgr->id_equipo }}</td>

                                            <td>
                                                <form action="{{ route('inscriptionsgrs.destroy',$inscriptionsgr->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inscriptionsgrs.show',$inscriptionsgr->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inscriptionsgrs.edit',$inscriptionsgr->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $inscriptionsgrs->links() !!}
            </div>
        </div>
    </div>
@endsection
