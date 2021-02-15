@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-md-12">
                <form action="{{ route('peliculas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">


                        <div class="card-header bg-info text-white">
                            <p class="text-2xl text-white">Ingreso de Películas</p>
                        </div>


                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="titulo">Titulo:</label>
                                        <input type="text" class="form-control" id="titulo"
                                            placeholder="Ingrese Titulo de la Película" name="titulo" required>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="Id_genero">Genero:</label>
                                                <select class="form-control" name="Id_genero" id="Id_genero" required>
                                                    <option value=""> Seleccione un Opción </option>
                                                    @foreach ($generos as $genero)
                                                        <option value="{{ $genero['id'] }}">{{ $genero['nombre'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="estreno">Año:</label>
                                                <input type="number" class="form-control" id="estreno" min="1900" max="2200"
                                                    placeholder="Estreno" name="estreno" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="resumen">Resumen:</label>
                                        <textarea class="form-control" rows="5" name="resumen" id="resumen"
                                            required></textarea>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Id_director">Director:</label>
                                        <select class="form-control" name="Id_director" id="Id_director" required>
                                            <option value=""> Seleccione un Opción </option>
                                            @foreach ($artistas as $artista)
                                                <option value="{{ $artista['id'] }}">{{ $artista['nombre'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Id_artista1">Protagonista 1:</label>
                                        <select class="form-control" name="Id_artista1" id="Id_artista1" required>
                                            <option value=""> Seleccione un Opción </option>
                                            @foreach ($artistas as $artista)
                                                <option value="{{ $artista['id'] }}">{{ $artista['nombre'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Id_artista2">Protagonista 2:</label>
                                        <select class="form-control" name="Id_artista2" id="Id_artista2">
                                            <option value="0"> Seleccione un Opción </option>
                                            @foreach ($artistas as $artista)
                                                <option value="{{ $artista['id'] }}">{{ $artista['nombre'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Id_artista3">Protagonista 3</label>
                                        <select class="form-control" name="Id_artista3" id="Id_artista3">
                                            <option value="0"> Seleccione un Opción </option>
                                            @foreach ($artistas as $artista)
                                                <option value="{{ $artista['id'] }}">{{ $artista['nombre'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="portada">Portada: </label>
                                        <input class='btn btn-primary' type="file" name="portada" id="portada" required
                                            placeholder="Seleccione Imagen de Portada" accept="image/*">
                                    </div>

                                    <img id="preview-image-before-upload"
                                        src="{{ asset('/storage/imagenes/imagen-no-disponible.jpg') }}"
                                        alt="preview imagen" style="max-height: 250px;">

                                </div>
                            </div>
                        </div>


                        <div class="card-footer bg-info "> <a name="" id="" class="btn btn-dark" href="/home"
                                role="button">Mi
                                Lista</a>
                            <button type="submit" class="btn btn-dark">Grabar</button>
                        </div>


                    </div>

                </form>
            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#portada').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>

@endsection
