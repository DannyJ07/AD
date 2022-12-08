@extends('layouts.app')

@section('template_title')
    Update Inscriptionsgr
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Inscriptionsgr</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('inscriptionsgrs.update', $inscriptionsgr->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('inscriptionsgr.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
