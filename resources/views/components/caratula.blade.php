<div class="container" >

                <div class="card ">


                    <div class="contenedor">
                        <img src="{{ asset('/storage/portadas/'. $pelicula->portada) }}" alt="Avatar" class="card-img-top image imagen_p" style="width:100%">
                       
                        <div class="middle">
                          <div class="texto"><h5>Resumen: </h5> {{ $pelicula->resumen }}</div>
                        </div>

                    </div>



                    <div class="card-body">
                        <h4 class="card-title">{{ $pelicula->titulo }}</h4>
                      {{ $pelicula->genero }} ({{ $pelicula->estreno }}) <hr class="mt-2 mb-2"/>
                      <strong>Director</strong> : {{ $pelicula->director }} <hr class="mt-2 mb-2"/>
                      <strong>Reparto:</strong>  <br class="mt-2 mb-2"/>
                      {{ $pelicula->actor1 }} <br class="mt-2 mb-2"/>
                      {{ $pelicula->actor2 }} <br class="mt-2 mb-2"/>
                      {{ $pelicula->actor3 }} <hr class="mt-2 mb-2"/>
                      <img  src="{{ asset ('/storage/imagenes/usuario.png')}}" style="max-height: 20px;">
                      {{ $pelicula->usuario }}
                    </div>
                </div>
</div>

<br>