@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">

                <div class="card">
                    <div class="card-header bg-blue-400">

                        <div class="row">
                            <div class="col">
                                <p class="text-2xl text-white">Buscador </p>
                            </div>

                            <div class="col">
                                <div class="float-right">
                                    <form class="form-inline" action="{{ route('peliculas.buscador') }}" method="POST">
                                        @csrf
                                        <input class="form-control mr-sm-2" type="text" name="busca"
                                            placeholder="Ingrese Búsqueda" required>

                                        <div class="form-group">
                                            <select class="form-control" name="tipobus">
                                                <option value="1"> Película</option>
                                                <option value="2"> Actor</option>
                                                <option value="3"> Director </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn bg-gray-500 text-white " type="submit">Buscar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>


                    </div>

                    <div class="card-body" style="min-height:450px ">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @isset($cant)

                            @if ($cant > 0)

                                @if ($tipobus == 1)
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Título</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sql as $item)
                                                <tr>
                                                    <td><a href="{{ route('peliculas.findp', $item->id) }}">
                                                            {{ $item['titulo'] }} </a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <hr>
                                @else
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Artista</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sql as $item)
                                                <tr>
                                                    <td>
                                                        @if ($tipobus == 2)
                                                            <a href="{{ route('peliculas.finda', $item->id) }}">
                                                            @else
                                                                <a href="{{ route('peliculas.findd', $item->id) }}">
                                                        @endif
                                                        {{ $item['nombre'] }} </a>
                                                    </td>
                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                    <hr>
                                @endif

                            @else
                                <div class="alert alert-danger" role="alert">
                                    No se encontraron registros!
                                </div>
                            @endif

                        @endisset

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
