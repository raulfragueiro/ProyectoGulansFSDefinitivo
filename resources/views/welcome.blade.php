@extends('layouts.main')
@section('contentStyle')
<style type="text/css">
  html,
  body,
  header,
  .carousel {
  height: 60vh;
  }

  @media (max-width: 740px) {

html,
body,
header,
.carousel {
    height: 30vh;
}
}
@media (min-width: 800px) and (max-width: 850px) {

html,
body,
header,
.carousel {
    height: 30vh;
}
}
</style>
@endsection
@section('content')
<!--Section: Proximo Partido-->
@foreach ($partidos as $partidos)
<section class="mt-5 wow fadeIn">
  <!--Grid fila-->
  <div class="row">
    <!--Grid columna-->
    <div class="col-md-6 mb-4">
      <img src="{{$partidos->imagen}}" class="img-fluid z-depth-1-half" alt="partidos-{{$partidos->id}}">
    </div>
    <!--Grid columna-->
    <!--Grid columna-->
    <div class="col-md-6 mb-4">
      <!-- Main -->
      <h3 class="h3 mb-3">Próximo Partido</h3>
      <p>Xornada: {{$partidos->jornada}}</p>
      <p>Rival: {{$partidos->rival}}</p>
      <p>Fecha: {{$partidos->fecha}}</p>
      <p>Hora: {{$partidos->hora}}</p>
      <p>Lugar: {{$partidos->lugar}}</p>
      <!-- CTA -->
      <a target="_blank" href="{{$partidos->convocados}}" class="btn btn-grey btn-md">Convocados
      </a>
      <a target="_blank" href="{{$partidos->campo}}" class="btn btn-grey btn-md">Ruta al Campo
      </a>
    </div>
    <!--Grid columna-->
  </div>
  <!--Grid fila-->
</section>
@endforeach
<!--Section: Proximo Partido-->
<hr class="my-5">
<!--Section: Resultados-->
<section class="mt-5 wow fadeIn">
  <div class="container">
    <div class="row">
      @foreach ($resultados as $resultados)
      <div class="col-sm">
        <img src="{{$resultados->imagen}}" class="img-fluid z-depth-1-half" alt="resultado-{{$resultados->id}}">
      </div>
      @endforeach
    </div>
  </div>
</section>
<!--Section: Resultados-->
<hr class="my-5">
<!--Section: Stats & Clasificacion-->
<section class="mt-5 wow fadeIn">
  <!--Grid fila-->
  <div class="row wow fadeIn">
    <!--Grid columna-->
    <div class="col-lg-6 col-md-12 px-4 mt-5">
      <div class="mt-5">
        <h5 class="feature-title text-center">Goleadores</h5>
        <table id="dtBasicExample" class="table table-striped table-bordered text-center table-sm" cellspacing="0" width="100%">
          <thead class="green">
            <tr>
              <th class="th-sm">
              </th>
              <th class="th-sm">Nombre
              </th>
              <th class="th-sm">Apellido
              </th>
              <th class="th-sm">Goles
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($jugadores as $jugadores)
            <tr>
              <td><img src="{{$jugadores->imagen}}" width="40px" height="40px" alt="jugador-{{$jugadores->nombre}}"></td>
              <td class="align-middle">{{$jugadores->nombre}}</td>
              <td class="align-middle">{{$jugadores->apellidos}}</td>
              <td class="align-middle">{{$jugadores->goles}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!--/Grid columna-->
    <!--Grid columna-->
    <div class="col-lg-6 col-md-12 px-4 d-flex justify-content-center">
      <div class="col-10 ">
        <h6 class="feature-title text-center">Clasificación Liga Metropolitana 2019-2020</h6>
        <table id="tablePreview" class="table table-striped text-center table-sm ">
          <!--Table head-->
          <thead>
            <tr>
              <th>Pos.</th>
              <th></th>
              <th>Equipo</th>
              <th>PT</th>
              <th>PJ</th>
              <th>PG</th>
              <th>PE</th>
              <th>PP</th>
            </tr>
          </thead>
          <!--Table head-->
          <!--Table body-->
          <tbody>
            @foreach ($clasificacion as $clasificacion)
            <tr>
              <th class="count"></th>
              <td><img src="{{$clasificacion->escudo}}" width="20px" height="20px"></td>
              <td>{{$clasificacion->equipo}}</td>
              <td>{{$clasificacion->puntos}}</td>
              <td>{{$clasificacion->partidos}}</td>
              <td>{{$clasificacion->victorias}}</td>
              <td>{{$clasificacion->empates}}</td>
              <td>{{$clasificacion->derrotas}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!--/Segunda fila-->
    <div style="height:30px"></div>
  </div>
  <!--/Grid columna-->
  <div style="height:30px"></div>
</section>
<!--Section: Stats & Clasificacion-->
@endsection