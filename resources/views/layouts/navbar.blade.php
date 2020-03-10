<header>
    <!-- Barra de Navegación INICIO-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
          <img src="{{ asset('mdbootstrap411/img/images/logo.png') }}" height="50" alt="logo">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Barra Izquierda -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Club</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/club">Datos do Club</a>
                <a class="dropdown-item" href="/contacto">Contacto</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Primer Equipo</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/plantilla">Plantilla</a>
                <a class="dropdown-item" href="/liga">Liga Metropolitana</a>
                <a class="dropdown-item" href="/agenda">Agenda</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sponsors">Patrocinadores</a>
            </li>
          </ul>

          <!-- Barra Derecha -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com/gulansfs" class="nav-link" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com/gulansfs" class="nav-link" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.instagram.com/gulansfs" class="nav-link" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Barra de Navegación FIN -->

    <!--Carrusel-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <!--Indicadores-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicadores-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--Primer slide-->
        <div class="carousel-item active">
          <div class="view " style="background-image: url({{ asset('mdbootstrap411/img/images/foto4.jpeg') }}); background-repeat: no-repeat; background-size: cover;">

            <!-- Mascara-->
            <div class="mask rgba-black-light">

            </div>
            <!-- Mascara-->

          </div>
        </div>
        <!--/Primer slide-->

        <!--Segundo slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url({{ asset('mdbootstrap411/img/images/foto2.jpeg') }}); background-repeat: no-repeat; background-size: cover;">

            <!-- Mascara-->
            <div class="mask rgba-black-light">

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Segundo slide-->

        <!--Tercer slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url({{ asset('mdbootstrap411/img/images/foto5.jpeg') }}); background-repeat: no-repeat; background-size: cover;">

            <!-- Mascara-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            </div>
            <!-- Mascara-->

          </div>
        </div>
        <!--/Tercer slide-->

      </div>
      <!--/.Slides-->

      <!--Controles-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.controles-->

    </div>
    <!--/.Carrusel-->

  </header>