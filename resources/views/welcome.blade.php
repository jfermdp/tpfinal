@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">


                <div class="card">
                    <div class="card-header bg-blue-400">


                        <div class="row">
                            <div class="col">
                                <p class="text-2xl text-white"> Ultimos Ingresos
                                    @isset($artista)
                                        {{ $artista }}
                                    @endisset
                                </p>
                            </div>
                            <div class="col">
                                @isset($artista)
                                    <a class="btn bg-gray-500 text-white float-right" href="/" role="button">Mostrar Todos</a>
                                @endisset
                            </div>
                        </div>


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
                        {{ $peliculas->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
