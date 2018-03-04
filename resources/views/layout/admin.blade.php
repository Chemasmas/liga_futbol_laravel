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
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
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
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="overflow: auto;">
            @if(auth()->user()["level"]<2)
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Torneos">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTorneos" data-parent="#exampleAccordion">
                        <i class="fa fa-trophy"></i>
                        <span class="nav-link-text">Torneos</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseTorneos">
                        <li>
                            <a class="nav-link" href="{{action('TorneoController@index')}}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                <span class="nav-link-text">Lista</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{action('TorneoController@all')}}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                <span class="nav-link-text">Historico</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <a class="nav-link" href="{{action('TorneoController@create')}}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <span class="nav-link-text">Crear</span>
                            </a>
                        </li>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Equipos">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseEquipos" data-parent="#exampleAccordion">
                        <i class="fa fa-users"></i>
                        <span class="nav-link-text">Equipos</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseEquipos">
                        <li>
                            <a class="nav-link" href="{{action('EquipoController@index')}}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                <span class="nav-link-text">Lista</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <a class="nav-link" href="{{action('EquipoController@create')}}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <span class="nav-link-text">Crear</span>
                            </a>
                        </li>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Instituciones">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseInstituciones" data-parent="#exampleAccordion">
                        <i class="fa fa-university"></i>
                        <span class="nav-link-text">Instituciones</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseInstituciones">
                        <li>
                            <a class="nav-link" href="{{action('InstitucionController@index')}}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                <span class="nav-link-text">Lista</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <a class="nav-link" href="{{action('InstitucionController@create')}}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <span class="nav-link-text">Crear</span>
                            </a>
                        </li>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administradores">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAdministradores" data-parent="#exampleAccordion">
                        <i class="fa fa-user"></i>
                        <span class="nav-link-text">Administradores</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseAdministradores">
                        <li>
                            <a class="nav-link" href="{{action('AdministradorController@index')}}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                <span class="nav-link-text">Lista</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <a class="nav-link" href="{{action('AdministradorController@create')}}">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span class="nav-link-text">Agregar</span>
                            </a>
                        </li>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Jugadores">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseJugadores" data-parent="#exampleAccordion">
                        <i class="fa fa-user"></i>
                        <span class="nav-link-text">Jugadores</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseJugadores">
                        <li>
                            <a class="nav-link" href="{{action('JugadorController@index')}}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                <span class="nav-link-text">Lista</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <a class="nav-link" href="{{action('JugadorController@create')}}">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span class="nav-link-text">Agregar</span>
                            </a>
                        </li>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Árbitros">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseArbitros" data-parent="#exampleAccordion">
                        <i class="fa fa-user"></i>
                        <span class="nav-link-text">Árbitros</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseArbitros">
                        <li>
                            <a class="nav-link" href="{{action('ArbitroController@index')}}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                <span class="nav-link-text">Lista</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <a class="nav-link" href="{{action('ArbitroController@create')}}">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span class="nav-link-text">Agregar</span>
                            </a>
                        </li>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Programadores">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProgramadores" data-parent="#exampleAccordion">
                        <i class="fa fa-user"></i>
                        <span class="nav-link-text">Programadores</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseProgramadores">
                        <li>
                            <a class="nav-link" href="{{action('ProgramadorController@index')}}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                <span class="nav-link-text">Lista</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{action('ProgramadorController@create')}}">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span class="nav-link-text">Agregar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Directorio">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseDirectorio" data-parent="#exampleAccordion">
                        <i class="fa fa-address-book"></i>
                        <span class="nav-link-text">Directorio</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseDirectorio">
                        <li>
                            <a class="nav-link" href="{{action('DirectorioController@programador')}}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                <span class="nav-link-text">Programadores</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{action('DirectorioController@arbitro')}}">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                <span class="nav-link-text">Árbitros</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(auth()->user()["level"]<3)
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Programacion">
                    <a class="nav-link" href="{{action('ProgramadorController@programacion')}}">
                        <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                        <span class="nav-link-text">Programación</span>
                    </a>
                </li>
            @endif
            @if(auth()->user()["level"]<3)
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Partidos">
                <a class="nav-link" href="{{action('ProgramadorController@partidos')}}">
                    <i class="fa fa-list-ol"></i>
                    <span class="nav-link-text">Partidos</span>
                </a>
            </li>
            @endif
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Perfil">
                <a class="nav-link" href="{{action('ProgramadorController@perfil')}}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span class="nav-link-text">Perfil</span>
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
    <div class="container-fluid" style="padding-left: 30px;">
        <!-- Breadcrumbs-->

        <div class="row">
            <div class="col-12">
                @if(Session::has('message'))
                <div class="alert alert-{{Session::get('message')['clase']}}" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{Session::get("message")["mensaje"]}}
                </div>
                @endif


                    <ol class="breadcrumb">
                        @foreach( $rutas as $ruta )
                            @if($ruta["active"]==0)
                                <li class="{{$ruta["active"]}}">{{$ruta["etiqueta"]}}</li>
                            @else
                                <li><a href="{{$ruta["link"]}}" >{{$ruta["etiqueta"]}}</a></li> /
                            @endif
                        @endforeach
                    </ol>

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
    <script src ="{{asset('js/bootstrap-filestyle.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</div>
</body>

</html>
