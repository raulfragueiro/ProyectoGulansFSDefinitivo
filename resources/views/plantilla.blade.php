@extends('layouts.main')
@section('content')
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mb-5">
        <h1 class="text-uppercase">Plantilla</h1>
        <h3>TEMPORADA 2019-2020</h3>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      @foreach ($jugadores as $jugadores)
      <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
        <div class="player mb-5">
          <span class="team-number">{{$jugadores->id}}</span>
          <img src="{{$jugadores->imagen}}" alt="jugador-{{$jugadores->id}}" class="img-fluid image rounded-circle">
          <h4>{{$jugadores->nombre}} {{$jugadores->apellido}}</h4>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection