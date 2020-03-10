@extends('layouts.main')
@section('content')
<!--Section-->
<section class="mt-5 wow fadeIn">
  <!--Grid fila-->
  <div class="row wow fadeIn">
    <!--Grid columna-->
    <div class="col-lg-6 col-md-12 px-4 d-flex justify-content-center">
      <div class="col-10">
        <h6>TEMPORADA 2019-2020</h6>
        <ul class="list-group mb-3">
          <li class="list-group-item">
            <div class="md-v-line"></div>
            <i class="fas fa-tshirt mr-4 pr-3"></i> Partidos Jugados: {{$jugadores->partidos}}
          </li>
          <li class="list-group-item">
            <div class="md-v-line"></div>
            <i class="fas fa-futbol mr-5"></i>Goles: {{$jugadores->goles}}
          </li>
          <li class="list-group-item">
            <div class="md-v-line"></div>
            <i class="far fa-clone mr-5"></i>Amarillas: {{$jugadores->amarillas}}
          </li>
          <li class="list-group-item">
            <div class="md-v-line"></div>
            <i class="fas fa-clone mr-5"></i>Rojas: {{$jugadores->rojas}}
          </li>
          <li class="list-group-item">
            <div class="md-v-line"></div>
            <i class="fas fa-crown mr-5"></i>MVP: {{$jugadores->mvp}}
          </li>
        </ul>

        <h6>TOTAL</h6>
        <ul class="list-group">
          <li class="list-group-item">
            <div class="md-v-line"></div>
            <i class="fas fa-tshirt mr-4 pr-3"></i> Partidos Jugados: {{$jugadores->partidosTotal}}
          </li>
          <li class="list-group-item">
            <div class="md-v-line"></div>
            <i class="fas fa-futbol mr-5"></i>Goles: {{$jugadores->golesTotal}}
          </li>
          <li class="list-group-item">
            <div class="md-v-line"></div>
            <i class="fas fa-crown mr-5"></i>MVP: {{$jugadores->mvpTotal}}
          </li>
        </ul>
      </div>
    </div>
    <!--/Grid columna-->
    <!--Grid columna-->
    <div class="col-lg-6 col-md-12 px-4 d-flex justify-content-center">
      <div class="col-10">
        <h3 class="feature-title">{{$jugadores->id}}. {{$jugadores->nombre}} {{$jugadores->apellidos}}</h3>
        <img src="{{$jugadores->imagen}}" alt="jugador-{{$jugadores->id}}" class="img-fluid image rounded-circle">
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