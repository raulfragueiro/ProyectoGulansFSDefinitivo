@extends('layouts.main')
@section('content')
<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Contacto</h2>
<div class="row">
  <!--Grid column-->
  <div class="col-md-9 mb-md-0 mb-5">
    <form id="contact-form" name="contact-form" action="{{ asset('mail.php') }}" method="POST">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-6">
          <div class="md-form mb-0">
            <input type="text" id="name" name="name" class="form-control">
            <label for="name" class="">Nombre</label>
          </div>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6">
          <div class="md-form mb-0">
            <input type="text" id="email" name="email" class="form-control">
            <label for="email" class="">Email</label>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <!--Grid row-->
      <div class="row">
        <div class="col-md-12">
          <div class="md-form mb-0">
            <input type="text" id="subject" name="subject" class="form-control">
            <label for="subject" class="">Asunto</label>
          </div>
        </div>
      </div>
      <!--Grid row-->
      <!--Grid row-->
      <div class="row">
        <div class="col-md-12">
          <div class="md-form mb-0">
            <input type="text" id="tel" name="tel" class="form-control">
            <label for="tel" class="">Teléfono</label>
          </div>
        </div>
      </div>
      <!--Grid row-->
      <!--Grid row-->
      <div class="row">
        <div class="col-md-12">
          <div class="md-form mb-0">
            <input type="text" id="address" name="address" class="form-control">
            <label for="address" class="">Dirección</label>
          </div>
        </div>
      </div>
      <!--Grid row-->
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-12">
          <div class="md-form">
            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
            <label for="message">Mensaje</label>
          </div>
        </div>
      </div>
      <!--Grid row-->
    </form>
    <div class="text-center text-md-left">
      <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
    </div>
    <div class="status"></div>
  </div>
  <!--Grid column-->
  <!--Grid column-->
  <div class="col-md-3 text-center">
    <ul class="list-unstyled mb-0">
      <li>
        <i class="fas fa-map-marker-alt fa-2x"></i>
        <p>36861 Guláns, Pontevedra, España</p>
      </li>
      <li>
        <i class="fas fa-phone mt-4 fa-2x"></i>
        <p>654 659 429</p>
      </li>
      <li>
        <i class="fas fa-envelope mt-4 fa-2x"></i>
        <p>gulansfutbolsala@gmail.com</p>
      </li>
    </ul>
  </div>
  <!--Grid column-->
</div>
<div class="row d-flex justify-content-center">
  <div id="mapid" style="width: 600px; height: 400px; position: relative; outline: none;" class="leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag" tabindex="0">
    <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
      <div class="leaflet-pane leaflet-tile-pane">
        <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
          <div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt="" role="presentation" src="./Quick Start - Leaflet_files/1361" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(-200px, -347px, 0px); opacity: 1;"><img alt="" role="presentation" src="./Quick Start - Leaflet_files/1361(1)" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(312px, -347px, 0px); opacity: 1;"><img alt="" role="presentation" src="./Quick Start - Leaflet_files/1362" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(-200px, 165px, 0px); opacity: 1;"><img alt="" role="presentation" src="./Quick Start - Leaflet_files/1362(1)" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(312px, 165px, 0px); opacity: 1;"></div>
        </div>
      </div>
      <div class="leaflet-pane leaflet-shadow-pane"><img src="./Quick Start - Leaflet_files/marker-shadow.png" class="leaflet-marker-shadow leaflet-zoom-animated" alt="" style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(300px, 247px, 0px);"></div>
      <div class="leaflet-pane leaflet-overlay-pane">
        <svg pointer-events="none" class="leaflet-zoom-animated" width="720" height="480" viewBox="-60 -40 720 480" style="transform: translate3d(-60px, -40px, 0px);">
          <g>
            <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#f03" fill-opacity="0.5" fill-rule="evenodd" d="M141.20355555554852,171.94704600190744a42,42 0 1,0 84,0 a42,42 0 1,0 -84,0 "></path>
            <path class="leaflet-interactive" stroke="#3388ff" stroke-opacity="1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#3388ff" fill-opacity="0.2" fill-rule="evenodd" d="M358 163L474 219L550 153z"></path>
          </g>
        </svg>
      </div>
      <div class="leaflet-pane leaflet-marker-pane"><img src="./Quick Start - Leaflet_files/marker-icon.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="" tabindex="0" style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(300px, 247px, 0px); z-index: 247;"></div>
      <div class="leaflet-pane leaflet-tooltip-pane"></div>
      <div class="leaflet-pane leaflet-popup-pane"></div>
      <div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(1.04805e+06px, 697379px, 0px) scale(4096);"></div>
    </div>
    <div class="leaflet-control-container">
      <div class="leaflet-top leaflet-left">
        <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="https://leafletjs.com/examples/quick-start/example-overlays.html#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="https://leafletjs.com/examples/quick-start/example-overlays.html#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div>
      </div>
      <div class="leaflet-top leaflet-right"></div>
      <div class="leaflet-bottom leaflet-left"></div>
      <div class="leaflet-bottom leaflet-right">
        <div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com/" title="A JS library for interactive maps">Leaflet</a> | Map data © <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a></div>
      </div>
    </div>
  </div>
  <script>
    var mymap = L.map('mapid').setView([42.156952, -8.538172], 13);
    
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    	maxZoom: 18,
    	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    	id: 'mapbox/streets-v11',
    	tileSize: 512,
    	zoomOffset: -1
    }).addTo(mymap);
    
    L.marker([42.156952, -8.538172]).addTo(mymap)
       .bindPopup("<h6>Oficinas do Club<h6>").openPopup();
    
  </script>
</div>
</section>
<!--Section: Contact v.2-->
@endsection