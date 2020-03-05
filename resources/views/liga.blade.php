@extends('layouts.main')
@section('content')
<!--Section: Datos do Club-->
<section>
  <!--Grid fila-->
  <div class="row wow fadeIn mt-4">
    <!--Grid columna-->
    <div class="col-lg-6 col-md-12 px-4">
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
              <th>GF</th>
              <th>GC</th>
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
              <td>{{$clasificacion->gFavor}}</td>
              <td>{{$clasificacion->gContra}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    <!--/Grid columna-->
    <!--Grid columna-->
    <div class="col-lg-6 col-md-12 px-4 mt-5">
      <div style="font-size: 1em;line-height: 1em;background: #000;color: #fff;margin: 0 auto;padding: 0.3em 0;width:90%;text-align:center">
        <a target="_blank" style="color:#FFF;text-decoration:none" href="https://www.siguetuliga.com/liga/galicia-ligas-locales-pontevedra-liga-metropolitana-fs-condado-honor?utm_source=widget2&utm_medium=webs%2Bo%2Bblogs&utm_campaign=Widgets%2Bresultados">Resultados Liga Metropolitana</a>
      </div>
      <script type="text/javascript">widthIcon = "14";heightIcon = "14";</script>
      <script language="javascript" src="https://www.siguetuliga.com/widget/resultados2.php?id=3899" charset="iso-8859-1"></script>
      <div style="height:30px"></div>
    </div>
    <!--/Grid columna-->
  </div>
  <!--/Grid fila-->
</section>
<!--Section: Stats & Clasificacion-->
@endsection