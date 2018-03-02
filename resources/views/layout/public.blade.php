<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content=""/>
    <!-- Document Title -->
    <title>Liga Poniente</title>
    <!-- StyleSheets -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/transition.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- FontsOnline -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- JavaScripts -->
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<!-- Wrapper -->
<div class="wrap push">

    <!-- Header -->
    <header class="header style-3">

        <!-- Top bar -->
        <div class="topbar-and-logobar">
            <div class="container">

                <!-- Responsive Button -->
                <div class="responsive-btn pull-right">
                    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
                </div>
                <!-- Responsive Button -->

                <!-- User Login Option -->
                <ul class="user-login-option pull-right">

                    <li class="login-modal">
                        <a href="#" class="login" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i>Login</a>
                        <div class="modal fade" id="login-modal">
                            <div class="login-form position-center-center">
                                <h2>Login<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
                                <form action="{{action("AdminController@login")}}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user" placeholder="domain@live.com">
                                        <i class=" fa fa-envelope"></i>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pass" placeholder="**********">
                                        <i class=" fa fa-lock"></i>
                                    </div>
                                    <div class="form-group custom-checkbox">
                                        <label>
                                            <input type="checkbox"> Stay login
                                        </label>
                                        <a class="pull-right forgot-password" href="#"></a>
                                        <a href="#" class="pull-right forgot-password" data-toggle="modal" data-target="#login-modal-2">Forgot password?</a>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn full-width red-btn">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade" id="login-modal-2">
                            <div class="login-form position-center-center">
                                <h2>Forgot password<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button></h2>
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user" placeholder="domain@live.com">
                                        <i class=" fa fa-envelope"></i>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pass" placeholder="**********">
                                        <i class=" fa fa-lock"></i>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn full-width red-btn">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- User Login Option -->

            </div>
        </div>
        <!-- Top bar -->

        <!-- Nav -->
        <div class="nav-holder">
            <div class="container">
                <div class="maga-drop-wrap">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.blade.php"><img src="images/LOGo final.png" alt="" width="250"></a>
                    </div>
                    <!-- Logo -->

                    <!-- Search Bar -->
                    <div class="search-bar-holder pull-right">
                        <div class="search-bar">
                            <input type="text" class="form-control" placeholder="Busquedas...">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <!-- Search Bar -->

                    <!-- Nav List -->
                    <ul class="nav-list pull-right">
                        <li>
                            <a href="/">Inicio</a>
                            <ul>
                                <li><a href="/about">quienes somos</a></li>
                                <li></li>
                            </ul>
                        </li>

                        <li>
                            <a href="/directory">directorio</a>
                            <ul>
                                <li><a href="/institutions">instituciones</a></li>
                                <li><a href="/programers">programadores</a></li>
                            </ul>
                        </li>
                        <li class="mega-dropdown">
                            <a href="regulation.html">reglamento</a>

                            <ul>
                                <li class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="blog-categories">
                                            <h2>Reglamento</h2>
                                            <ul class="blog-categories-list">
                                                <li><a href="docs/competitionregulation.pdf">reglamento de competencia</a></li>
                                                <li><a href="docs/technicalannex.pdf">Anexo Tecnico</a></li>
                                                <li><a href="docs/formatsanddocuments.pdf">categorias y formatos</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        <div id="mega-blog-slider" class="mega-blog-slider">

                                            <!-- Post Img -->
                                            <div class="item">

                                                <!-- Post Img -->
                                                <div class="large-post-img">
                                                    <img src="images/blog-grid-view/img-2-1.jpg" alt="">
                                                </div>
                                                <!-- Post Img -->

                                                <!-- Post Detail -->
                                                <div class="large-post-detail style-3 p-0">
                                                    <span class="red-color"></span><a href="docs/competitionregulation.pdf" download="competitionregulation">DESCARGAR</a>
                                                    <h2>reglamento de competencia</h2>
                                                </div>
                                                <!-- Post Detail -->

                                            </div>
                                            <!-- Post Img -->

                                            <!-- Post Img -->
                                            <div class="item">

                                                <!-- Post Img -->
                                                <div class="large-post-img">
                                                    <img src="images/blog-grid-view/img-2-1.jpg" alt="">
                                                </div>
                                                <!-- Post Img -->

                                                <!-- Post Detail -->
                                                <div class="large-post-detail style-3 p-0">
                                                    <span class="red-color"></span><a href="docs/technicalannex.pdf" download="technicalannex">DESCARGAR</a>
                                                    <h2>anexo</h2>
                                                    <h2>tecnico</h2>
                                                </div>
                                                <!-- Post Detail -->

                                            </div>
                                            <!-- Post Img -->

                                            <!-- Post Img -->
                                            <div class="item">

                                                <!-- Post Img -->
                                                <div class="large-post-img">
                                                    <img src="images/blog-grid-view/img-2-1.jpg" alt="">
                                                </div>
                                                <!-- Post Img -->

                                                <!-- Post Detail -->
                                                <div class="large-post-detail style-3 p-0">
                                                    <span class="red-color"></span><a href="docs/formatsanddocuments.pdf" download="formatsanddocuments">DESCARGAR</a>
                                                    <h2>categorias y formatos</h2>
                                                </div>
                                                <!-- Post Detail -->

                                            </div>
                                            <!-- Post Img -->

                                            <!-- Post Img -->
                                            <div class="item">

                                                <!-- Post Img -->

                                                <!-- Post Img -->

                                                <!-- Post Detail -->

                                                <!-- Post Detail -->

                                            </div>
                                            <!-- Post Img -->

                                            <!-- Post Img -->
                                            <div class="item">

                                                <!-- Post Img -->
                                                <div class="large-post-img">
                                                    <img src="images/blog-grid-view/img-2-1.jpg" alt="">
                                                </div>
                                                <!-- Post Img -->

                                                <!-- Post Detail -->
                                                <div class="large-post-detail style-3 p-0">
                                                    <span class="red-color">Englis FA Cup</span>
                                                    <h2>Man United reunion for Ibrahimovic,</h2>
                                                </div>
                                                <!-- Post Detail -->

                                            </div>
                                            <!-- Post Img -->

                                            <!-- Post Img -->
                                            <div class="item">

                                                <!-- Post Img -->
                                                <div class="large-post-img">
                                                    <img src="images/blog-grid-view/img-2-2.jpg" alt="">
                                                </div>
                                                <!-- Post Img -->

                                                <!-- Post Detail -->
                                                <div class="large-post-detail style-3 p-0">
                                                    <span class="red-color">Englis FA Cup</span>
                                                    <h2>Man United reunion for Ibrahimovic,</h2>
                                                </div>
                                                <!-- Post Detail -->

                                            </div>
                                            <!-- Post Img -->

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">estadisticas</a>
                            <ul>
                                <li><a href="#">Femenil</a></li>
                                <li><a href="#">varonil</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact">contacto</a></li>
                    </ul>
                    <!-- Nav List -->

                </div>
            </div>
        </div>
        <!-- Nav -->

    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="main-footer style-2">

        <!-- Footer Columns -->
        <div class="container">

            <!-- Footer columns -->
            <div class="footer-column border-0">
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
                        <div class="column-widget h-white">
                            <div class="logo-column p-white">
                                <img src="images/LOGo final.png" alt="" width="300" class="footer-logo">
                                <ul class="address-list style-2">
                                    <li><span>Direccion:</span>Calle granjas No.45 Col. Palo Alto, Cuajimalpa C.P. 05110</li>
                                    <li><span>Telefono:</span>5539441545</li>
                                    <li><span>Telefono:</span>5523738571</li>
                                    <li><span>E-mail:</span>info@ligaponiente.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Column -->

                    <!-- Footer Column -->
                    <div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
                        <div class="column-widget h-white">
                            <h5>Mediva Sport</h5>
                            <a href="https://medicasport01.wixsite.com/misitio"><img src="images/Anuncio.jpeg" alt=""></a>
                        </div>
                    </div>
                    <!-- Footer Column -->

                    <!-- Footer Column -->
                    <div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
                        <div class="column-widget h-white">
                            <h5>Patrocinadores</h5>
                            <ul id="brand-icons-slider-2" class="brand-icons-slider-2">
                                <li>
                                    <a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
                                    <a href="#"><img src="images/brand-icons/img-1-2.png" alt=""></a>
                                    <a href="#"><img src="images/brand-icons/img-1-3.png" alt=""></a>
                                    <a href="#"><img src="images/brand-icons/img-1-4.png" alt=""></a>
                                    <a href="#"><img src="images/brand-icons/img-1-5.png" alt=""></a>
                                    <a href="#"><img src="images/brand-icons/img-1-6.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/brand-icons/img-1-1.png" alt=""></a>
                                    <a href="#"><img src="images/brand-icons/img-1-2.png" alt=""></a>
                                    <a href="#"><img src="images/brand-icons/img-1-3.png" alt=""></a>
                                    <a href="#"><img src="images/brand-icons/img-1-4.png" alt=""></a>
                                    <a href="#"><img src="images/brand-icons/img-1-5.png" alt=""></a>
                                    <a href="#"><img src="images/brand-icons/img-1-6.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Column -->

                </div>
            </div>
            <!-- Footer columns -->

        </div>
        <!-- Footer Columns -->

        <!-- Copy Rights -->
        <div class="copy-rights">
            <div class="container">
                <p>© Copyright by <i class="red-color"> Liga Poniente</i> All rights reserved.</p>
                <a class="back-to-top scrollup" href="#"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
        <!-- Copy Rights -->

    </footer>
    <!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<nav id="menu" class="responive-nav">
    <a class="r-nav-logo" href="home-1.html"><img src="images/LOGo final.png" alt="" width="1921"></a>
    <ul class="respoinve-nav-list">
        <li><a data-toggle="collapse" href="#list-1"><em class="pull-right fa fa-angle-down"></em>Inicio</a>
            <ul class="collapse" id="list-1">
                <li><a href="about.html">Quienes Somos</a></li>
            </ul>
        </li>
        <li><a data-toggle="collapse" href="#list-2"><em class="pull-right fa fa-angle-down"></em>Directorio</a>
            <ul class="collapse" id="list-2">
                <li><a href="institutions.html">Instituciones</a></li>
                <li><a href="programers.html">Programadores</a></li>
            </ul>
        </li>
        <li>
            <a data-toggle="collapse" href="#list-3"><i class="pull-right fa fa-angle-down"></i>Reglamento</a>
            <ul class="collapse" id="list-3">
                <li><a href="reglament.html">Reglamento de Competencia</a></li>
                <li><a href="Technicalannex.html">Anexo Tecnico</a></li>
                <li><a href="formatsanddocuments.html">Documentos y Formatos</a></li>
            </ul>
        </li>
        <li><a data-toggle="collapse" href="#list-4"><em class="pull-right fa fa-angle-down"></em>Estadisticas</a>
            <ul class="collapse" id="list-4">
                <li><a href="female.html">Femenil</a></li>
                <li><a href="male.html">Varonil</a></li>
            </ul>
        </li>
        <li><a href="contact.html">Contacto</a></li>
    </ul>
</nav>
<!-- Slide Menu -->

<!-- Java Script -->
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/bigslide.js"></script>
<script src="js/slick.js"></script>
<script src="js/waterwheelCarousel.js"></script>
<script src="js/contact-form.js"></script>
<script src="js/countTo.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/rating-star.js"></script>
<script src="js/range-slider.js"></script>
<script src="js/spinner.js"></script>
<script src="js/parallax.js"></script>
<script src="js/countdown.js"></script>
<script src="js/appear.js"></script>
<script src="js/prettyPhoto.js"></script>
<script src="js/wow-min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from finelayers.net/html/soccer/soccer-ltr/about.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2018 07:57:16 GMT -->
</html>