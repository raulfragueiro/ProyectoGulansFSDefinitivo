@extends('layouts.main')
@section('content')
<!--Section: Datos do Club-->
<section>
  <!--Grid row-->
  <div class="row d-flex justify-content-center">
    <!--Grid column-->
    <div class="col-md-9">
      <div style="height:30px"></div>
      <div class="row">
        <h2>PATROCINADORES</h2>
      </div>
      <div class="row">
        <h6>PATROCINADOR PRINCIPAL</h6>
        <img src="{{ asset('mdbootstrap411/img/images/culturalBlack.png') }}" alt="Image-cultural" class="img-fluid image" width="265px" height="267px">
      </div>
      <div class="row">
        <h6>PATROCINADORES</h6>
        <div class="col-md-3">
          <img src="{{ asset('mdbootstrap411/img/images/A-DE-COPI.jpeg') }}" alt="Image-copi" class="img-fluid image">
        </div>
        <div class="col-md-3">
          <img src="{{ asset('mdbootstrap411/img/images/barral.png') }}" alt="Image-barral" class="img-fluid image">
        </div>
        <div class="col-md-3">
          <img src="{{ asset('mdbootstrap411/img/images/taxi.PNG') }}" alt="Image-taxi" class="img-fluid image" width="110px">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection