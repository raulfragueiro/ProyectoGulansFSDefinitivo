@extends('layouts.main')
@section('content')
<!--Section: Datos do Club-->
<section>
  <!--Grid fila-->
  <div class="row wow fadeIn mt-4">
    <div class="container">
      <div class="row">
        <div style="height:30px"></div>
        <table id="dtOrderExample" class="table table-striped table-bordered text-center table-sm" cellspacing="0" width="100%">
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
              <th class="th-sm">Partidos
              </th>
              <th class="th-sm">MVP
              </th>
              <th class="th-sm">Goles Totales
              </th>
              <th class="th-sm">Partidos Totales
              </th>
              <th class="th-sm">MVP Total
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($jugadores as $jugadores)
            <tr>
              <td><img src="{{$jugadores->imagen}}" width="40px" height="40px" alt="jugador-{{$jugadores->id}}"></td>
              <td class="align-middle">{{$jugadores->nombre}}</td>
              <td class="align-middle">{{$jugadores->apellidos}}</td>
              <td class="align-middle">{{$jugadores->goles}}</td>
              <td class="align-middle">{{$jugadores->partidos}}</td>
              <td class="align-middle">{{$jugadores->mvp}}</td>
              <td class="align-middle">{{$jugadores->golesTotal}}</td>
              <td class="align-middle">{{$jugadores->partidosTotal}}</td>
              <td class="align-middle">{{$jugadores->mvpTotal}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div style="height:30px"></div>
</section>
<!--Section: Stats & Clasificacion-->
@endsection