@extends('layouts.main')
@section('content')
<!--Section: Datos do Club-->
<section>
  <!--Grid fila-->
  <div class="row wow fadeIn mt-4">
    <!--Grid columna-->
    <div class="col-lg-6 col-md-12 px-4">
      <!--Segunda fila-->
      <div class="row">
        <div class="col-md-6 mb-4">
          <img src="{{ asset('mdbootstrap411/img/images/logo.png') }}" height=160 alt="logo">
        </div>
      </div>
      <div class="row">
        <div col-md-6 mb-4>
          <h3 class="h3 mb-3">Datos Do Club</h3>
          <p>Categoría: Liga Metropolitana Condado Honor</p>
          <p>Fecha Fundación: 2018</p>
          <p>Temporadas 2018-2019: 14º - 8 puntos</p>
          <p class="mb-0">INDUMENTARIA
          <p class="mb-0">Primera: Camiseta verde e negra. Pantalón negro. Medias negras.
          <p>Segunda: Camiseta negra. Pantalón negro. Medias negras.</p>
          <p class="mb-0">Oficinas CP-9003, 9, Ponteareas, PO
          <p class="mb-0">Teléfono: 982 25 03 45</p>
          <p>Email: gulansfutbolsala@gmail.com</p>
        </div>
      </div>
      <!--/Segunda fila-->
      <div style="height:30px"></div>
    </div>
    <!--/Grid columna-->
  </div>
  <!--/Grid fila-->
</section>
<!--Section: Stats & Clasificacion-->
@endsection