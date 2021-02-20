<div class="container">

    <div class="card ">


        <div class="contenedor">
            <img src="{{ asset('/storage/portadas/' . $pelicula->portada) }}" alt="Portada"
                class="card-img-top image imagen_p" style="width:100%;min-height:350px">

            <div class="middle">
                <div class="texto">
                    <strong>Resumen: </strong> {{ $pelicula->resumen }}
                </div>
            </div>

        </div>

        <div class="card-body">
            <div style="height: 90px">
                <p class="text-2xl">{{ $pelicula->titulo }}</p>
                {{ $pelicula->genero }} ({{ $pelicula->estreno }})
            </div>
            <hr class="mt-2 mb-2" />
            <strong>Director:</strong> <a href="{{ route('peliculas.find', $pelicula->Id_director) }}">
                {{ $pelicula->director }} </a>
            <hr class="mt-2 mb-2" />
            <div style="height: 90px">
                <strong>Reparto:</strong> <br class="mt-2 mb-2" />
                <a href="{{ route('peliculas.find', $pelicula->Id_artista1) }}"> {{ $pelicula->actor1 }} </a> <br
                    class="mt-2 mb-2" />
                @if ($pelicula->actor2)
                    <a href="{{ route('peliculas.find', $pelicula->Id_artista2) }}"> {{ $pelicula->actor2 }} </a> <br
                        class="mt-2 mb-2" />
                @endif
                <a href="{{ route('peliculas.find', $pelicula->Id_artista3) }}"> {{ $pelicula->actor3 }} </a>
            </div>
            <hr class="mt-2 mb-2" />
            <div class="row">
                <div class="col-sm-4"> </div>
                <div class="col-sm-4">
                    <form action="{{ route('peliculas.destroy', $pelicula) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="image" src="{{ asset('/storage/imagenes/borrar.png') }}" alt="Submit"
                            class="float-right">
                    </form>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('peliculas.edit', $pelicula) }}"><img
                            src="{{ asset('/storage/imagenes/editar.png') }}"></a>
                </div>
            </div>

        </div>

    </div>
</div>

<br>
