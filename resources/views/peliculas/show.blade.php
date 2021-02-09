@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> <h1>Peliculas {{$pelicula}}</h1>  </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Principal Peliculas') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection