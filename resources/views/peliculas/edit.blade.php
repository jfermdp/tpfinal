@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-md-12">
                <form action="{{ route('peliculas.update', $pelicula) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card">


                        <div class="card-header bg-info text-white">
                            <p class="text-2xl text-white">Edición de Película</p>
                        </div>


                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="titulo">Titulo:</label>
                                        <input type="text" class="form-control" id="titulo"
                                            placeholder="Ingrese Titulo de la Película" name="titulo"
                                            value="{{ $pelicula->titulo }}" required>
                                        <div class="valid-feedback">Valido.</div>
                                        <div class="invalid-feedback">Por favor complete este campo.</div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="Id_genero">Genero: {{ $pelicula->Id_genero }}</label>
                                                <select class="form-control" name="Id_genero" id="Id_genero">
                                                    @foreach ($generos as $genero)
                                                        <option value="{{ $genero['id'] }}" @if ($pelicula->Id_genero == $genero['id']) {{ 'selected' }} @endif>
                                                            {{ $genero['nombre'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="estreno">Año:</label>
                                                <input type="number" class="form-control" id="estreno" min="1900" max="2200"
                                                    placeholder="Ingresa Año de Estreno" name="estreno"
                                                    value="{{ $pelicula->estreno }}" required>
                                                <div class="valid-feedback">Valido.</div>
                                                <div class="invalid-feedback">Por favor complete este campo.</div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="resumen">Resumen:</label>
                                        <textarea class="form-control" rows="5" name="resumen" id="resumen"
                                            required>{{ $pelicula->resumen }}</textarea>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Id_director">Director:</label>
                                        <select class="form-control" name="Id_director" id="Id_director">
                                            @foreach ($artistas as $artista)
                                                <option value="{{ $artista['id'] }}" @if ($pelicula->Id_director == $artista['id']) {{ 'selected' }} @endif>
                                                    {{ $artista['nombre'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Id_artista1">Protagonista 1:</label>
                                        <select class="form-control" name="Id_artista1" id="Id_artista1">
                                            @foreach ($artistas as $artista)
                                                <option value="{{ $artista['id'] }}" @if ($pelicula->Id_artista1 == $artista['id']) {{ 'selected' }} @endif>
                                                    {{ $artista['nombre'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Id_artista2">Protagonista 2:</label>
                                        <select class="form-control" name="Id_artista2" id="Id_artista2">
                                            <option value='0'> Seleccione un Opción </option>
                                            @foreach ($artistas as $artista)
                                                <option value="{{ $artista['id'] }}" @if ($pelicula->Id_artista2 == $artista['id']) {{ 'selected' }} @endif>
                                                    {{ $artista['nombre'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Id_artista3">Protagonista 3</label>
                                        <select class="form-control" name="Id_artista3" id="Id_artista3">
                                            <option value='0'> Seleccione un Opción </option>
                                            @foreach ($artistas as $artista)
                                                <option value="{{ $artista['id'] }}" @if ($pelicula->Id_artista3 == $artista['id']) {{ 'selected' }} @endif>
                                                    {{ $artista['nombre'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="portada">Portada: </label>
                                        <input class='btn btn-primary' type="file" name="portada" id="portada"
                                            placeholder="Seleccione Imagen de Portada" accept="image/*">
                                        @error('portada')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <img id="preview-image-before-upload"
                                        src="{{ asset('/storage/portadas/' . $pelicula->portada) }}" alt="portada"
                                        style="max-height: 250px;">



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
