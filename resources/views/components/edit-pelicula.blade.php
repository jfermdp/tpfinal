<div class="container" >

    <div class="card ">


        <div class="contenedor">
            <img src="{{ asset('/storage/portadas/'. $pelicula->portada) }}" alt="Portada" class="card-img-top image imagen_p" style="width:100%;min-height:350px">
           
            <div class="middle">
              <div class="texto"><h5>Resumen: </h5> {{ $pelicula->resumen }}</div>
            </div>

        </div>



        <div class="card-body">
            <div style="height: 90px">    
            <p class="text-2xl">{{ $pelicula->titulo }}</p>
          {{ $pelicula->genero }} ({{ $pelicula->estreno }}) 
            </div>
          <hr class="mt-2 mb-2"/>
          <strong>xDirector</strong> : {{ $pelicula->director }} <hr class="mt-2 mb-2"/>
          <strong>Reparto:</strong>  <br class="mt-2 mb-2"/>
          {{ $pelicula->actor1 }} <br class="mt-2 mb-2"/>
          {{ $pelicula->actor2 }} <br class="mt-2 mb-2"/>
          {{ $pelicula->actor3 }} <hr class="mt-2 mb-2"/>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <img  src="{{ asset ('/storage/imagenes/eliminar2.png')}}" class="float-right">
  </div>
  <div class="col-sm-4">
    <img  src="{{ asset ('/storage/imagenes/note2.png')}}" >
  </div>
</div>

        </div>

    </div>
</div>

<br>