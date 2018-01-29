<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('rol') | @yield('titulo')</title>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Liga Poniente</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            @if(auth()->user()["level"]<2)
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Torneos">
                <a class="nav-link" href="{{action('TorneoController@create')}}">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <span class="nav-link-text">Torneos</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Equipos">
                <a class="nav-link" href="{{action('EquipoController@create')}}">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span class="nav-link-text">Equipos</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Crear Administrador">
                <a class="nav-link" href="crearAdministrador.html">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <span class="nav-link-text">Crear Administrador</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Crear Jugador">
                <a class="nav-link" href="crearJugador.html">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <span class="nav-link-text">Crear Jugador</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Crear Arbitro">
                <a class="nav-link" href="crearArbitro.html">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <span class="nav-link-text">Crear Árbitro</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Crear Programador">
                <a class="nav-link" href="crearProgramador.html">
                    <i class="fa fa-user-plus"></i>
                    <span class="nav-link-text">Crear Programador</span>
                </a>
            </li>
            @endif
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Juegos">
                <a class="nav-link" href="juegos.html">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Juegos</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Equipos">
                <a class="nav-link" href="equipos.html">
                    <i class="fa fa-fw fa-table" aria-hidden="true"></i>
                    <span class="nav-link-text">Equipos</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Programacion">
                <a class="nav-link" href="programacion.html">
                    <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                    <span class="nav-link-text">Programación</span>
                </a>
            </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="navbar-brand" href="#"><i class="fa fa-user"></i>{{auth()->user()["username"]}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Salir</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->

        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Liga Poniente</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" si está listo para finalizar su sesión.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{action('AdminController@logout')}}">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
</div>
</body>

</html>
