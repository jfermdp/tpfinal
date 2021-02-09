@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-md-12">
                <form action="{{route('peliculas.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">


                        <div class="card-header">
                            <h4>Ingreso de Películas</h4>
                        </div>


                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="titulo">Titulo:</label>
                                        <input type="text" class="form-control" id="titulo" placeholder="Ingrese Titulo de la Película"
                                            name="titulo" required>
                                        <div class="valid-feedback">Valido.</div>
                                        <div class="invalid-feedback">Por favor complete este campo.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="estreno">Año:</label>
                                        <input type="number" class="form-control" id="estreno" placeholder="Ingresa Año de Estreno"
                                            name="estreno" required>
                                            <div class="valid-feedback">Valido.</div>
                                            <div class="invalid-feedback">Por favor complete este campo.</div>
                                    </div>
                                      <div class="form-group">
                                        <label for="Id_genero">Genero:</label>
                                        <select class="form-control" name="Id_genero" id="Id_genero">
                                          <option value=''> Seleccione un Opción </option>
                                          @foreach ($generos as $genero)
                                          <option value="{{$genero['id']}}">{{$genero['nombre']}}</option>
                                          @endforeach
                                        </select>
                                      </div>

                                </div>

                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="Id_director">Genero:</label>
                                    <select class="form-control" name="Id_director" id="Id_director">
                                      <option value=''> Seleccione un Opción </option>
                                      @foreach ($artistas as $artista)
                                      <option value="{{$artista['id']}}">{{$artista['nombre']}}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="Id_artista1">Protagonista 1:</label>
                                    <select class="form-control" name="Id_artista1" id="Id_artista1">
                                      <option value=''> Seleccione un Opción </option>
                                      @foreach ($artistas as $artista)
                                      <option value="{{$artista['id']}}">{{$artista['nombre']}}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="Id_artista2">Protagonista 2:</label>
                                    <select class="form-control" name="Id_artista2" id="Id_artista2">
                                      <option value=''> Seleccione un Opción </option>
                                      @foreach ($artistas as $artista)
                                      <option value="{{$artista['id']}}">{{$artista['nombre']}}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="Id_artista3">Protagonista 3</label>
                                    <select class="form-control" name="Id_artista3" id="Id_artista3">
                                      <option value=''> Seleccione un Opción </option>
                                      @foreach ($artistas as $artista)
                                      <option value="{{$artista['id']}}">{{$artista['nombre']}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                      

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="resumen">Resumen:</label>
                                        <textarea class="form-control" rows="5" name="resumen" id="resumen"></textarea>
                                    </div>


                                    <div class="form-group">
                                      <input type="file" name="portada" placeholder="Seleccione Imagen de Portada" accept="image/*">
                                        @error('portada')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div class="card-footer"> <a name="" id="" class="btn btn-primary" href="/home" role="button">Mi
                                Lista</a>
                            <button type="submit" class="btn btn-primary">Grabar</button>
                        </div>


                    </div>

                </form>
            </div>

        </div>

    </div>

@endsection