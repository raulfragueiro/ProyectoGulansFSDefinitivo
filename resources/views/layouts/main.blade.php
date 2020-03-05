<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Inicio | Guláns Fútbol Sala</title>
        <link rel="icon" type="image/vnd.microsoft.icon" href="/img/logo.ico">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('mdbootstrap411/css/bootstrap.min.css') }}">
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="{{ asset('mdbootstrap411/css/mdb.min.css') }}">
        <!-- Your custom styles (optional) -->
        <link rel="stylesheet" href="{{ asset('mdbootstrap411/css/style.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
        <style type="text/css">
            html,
            body,
            header,
            .carousel {
                height: 30vh;
            }

            @media (max-width: 740px) {

                html,
                body,
                header,
                .carousel {
                    height: 100vh;
                }
            }
            @media (min-width: 800px) and (max-width: 850px) {

                html,
                body,
                header,
                .carousel {
                    height: 100vh;
                }
            }
            @media (min-width: 800px) and (max-width: 850px) {
                .navbar:not(.top-nav-collapse) {
                    background: #929FBA !important;
                }
            }

            .player .team-number {
            position: absolute;
            width: 30px;
            height: 30px;
            background: #09891A;
            border-radius: 50%;
            color: #fff;
            }

            .player .team-number > span {
            position: absolute;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            }

            #mapid { height: 180px; }

            table {
                counter-reset: section;
                }

            .count:before {
                counter-increment: section;
                content: counter(section);
                }
        </style>
    </head>
  <body>

    <!-- Start your project here-->  
    @yield('contentStyle')
    @include('layouts.navbar')
    <!--Main layout-->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <!--Main layout-->
    @include('layouts.footer')

    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('mdbootstrap411/js/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('mdbootstrap411/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('mdbootstrap411/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('mdbootstrap411/js/mdb.min.js') }}"></script>
    <!-- Initializations -->
    <script type="text/javascript">
            // Animations initialization
            new WOW().init();

        </script>
</body>
</html>