@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Ultimos Ingresos!</h5>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            @foreach ($peliculas as $pelicula)
                                <div class="col-sm-3">
                                    <x-caratula :pelicula="$pelicula" />
                                </div>
                            @endforeach
                        </div>
                        <br>
                        {{$peliculas->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
