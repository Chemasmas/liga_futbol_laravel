@extends('layout.public')

@section('titulo','Inicio')

@section('content')

    <!-- Slider Holder -->
    <div class="slider-holder">

        <!-- Banner slider -->
        <ul id="main-slides" class="main-slides">

            <!-- Itme -->
            <li>
                <div id="animated-slider" class="carousel slide carousel-fade">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <!-- Item -->
                        <div class="item active">
                            <img src="images/banner-slider/img-01.jpg" alt="">
                            <div class="position-center-x full-width">
                                <div class="container">
                                    <div class="banner-caption style-1 p-white h-white pull-right">
                                        <h1 class="animated fadeInUp delay-1s">Calendario<br>Proximos<br>Partidos</h1>
                                        <p class="animated fadeInUp delay-2s">Información General</p>
                                        <a class="btn lg red-btn animated fadeInRight delay-3s" href="#"><i>+</i>Leer mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->

                        <!-- Item -->
                        <div class="item">
                            <img src="images/banner-slider/img-02.jpg" alt="">
                            <div class="position-center-x full-width">
                                <div class="container">
                                    <div class="banner-caption style-2 p-white h-white pull-left">
                                        <h1 class="animated fadeInUp delay-1s">Estadisticas<br>de jornada<br>actual</h1>
                                        <p class="animated fadeInUp delay-2s">informacion general</p>
                                        <a class="btn lg red-btn animated fadeInRight delay-3s" href="#"><i>+</i>Leer mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->

                        <!-- Item -->
                        <div class="item">
                            <img src="images/banner-slider/img-03.jpg" alt="">
                            <div class="position-center-x full-width">
                                <div class="container">
                                    <div class="banner-caption style-2 p-white h-white pull-left">
                                        <h1 class="animated fadeInUp delay-1s">Nuestras Convocatorias<br>Inscripciones<br>Abiertas</h1>
                                        <p class="animated fadeInUp delay-2s">informacion general</p>
                                        <a class="btn lg red-btn animated fadeInRight delay-3s" href="#"><i>+</i>Leer mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->

                    </div>
                    <!-- Wrapper for slides -->

                    <!-- Nan Control -->
                    <!-- <a class="slider-nav next" href="#animated-slider" data-slide="prev"><i class="fa fa-long-arrow-right"></i></a>
                    <a class="slider-nav prev" href="#animated-slider" data-slide="next"><i class="fa fa-long-arrow-left"></i></a> -->
                    <!-- Nan Control -->

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#animated-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#animated-slider" data-slide-to="1"></li>
                        <li data-target="#animated-slider" data-slide-to="2"></li>
                    </ul>
                    <!-- Indicators -->

                </div>
            </li>
            <!-- Itme -->

            <!-- Itme -->
            <li>
                <img src="images/banner-bgs/img-03.jpg" alt="">
                <div class="video-banner-caption position-center-center p-white h-white">
                    <h1>Continuous effort  not strength or<br> intelligence  is the key to unlocking our potential</h1>
                    <p>Hart's short pass wasn't controlled by Fernando, and the Swedish striker's tackle<br> resulted in the ball rolling into the net. While the bulk</p>
                    <ul class="btn-list">
                        <li><a class="btn lg red-btn" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]">watch video<i class="fa fa-play-circle"></i></a></li>
                        <li><a class="btn lg red-btn" href="#">MOre videos<i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </li>
            <!-- Itme -->

            <!-- Itme -->
            <li>
                <img src="images/banner-bgs/img-01.jpg" alt="">
            </li>
            <!-- Itme -->

            <!-- Itme -->
            <li>
                <img src="images/banner-bgs/img-02.jpg" alt="">
                <div class="position-center-center">
                    <div class="container theme-padding">
                        <div class="pager-heading match-detail h-white">
                            <span class="pull-left win-tag"><img src="images/Instituciones Logos/cumbres.gif" alt=""></span>
                            <div class="vs-match-heading position-center-center">
                                <strong class="vs-match-result">3<span>Vs</span>1</strong>
                                <span class="end-time"><i class="fa fa-clock-o"></i>13:57 min (IST)</span>
                            </div>
                            <span class="pull-right loss-tag"><img src="images/Instituciones Logos/9999719-300x300e405.png" alt=""></span>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Itme -->

        </ul>
        <!-- Banner slider -->

        <!-- Slides Thmnail -->
        <div class="main-slides-thumb">
            <div class="container">
                <ul id="slides-thmnail" class="slides-thmnail">
                    <li>
                        <span><i class="fa fa-sliders"></i>Slides</span>
                    </li>
                    <li>
                        <span><i class="fa fa-play-circle"></i>Video</span>
                    </li>
                    <li>
                        <span><i class="fa fa-soccer-ball-o"></i>clasificados</span>
                    </li>
                    <li>
                        <span><i class="fa fa-bar-chart"></i>resultados</span>
                    </li>
                </ul>
                <ul class="thmnail-arrows">
                    <li class="prev-1"><span class="icon-arrow-01"></span></li>
                    <li class="next-1"><span class="icon-arrow-01"></span></li>
                </ul>
            </div>
        </div>
        <!-- Slides Thmnail -->

    </div>
    <!-- Slider Holder -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- Match Detail -->
        <section class="theme-padding-bottom bg-fixed">
            <div class="container">

                <!-- Add Banners -->
                <div class="add-banners">
                    <ul id="add-banners-slider" class="add-banners-slider">
                        <li>
                            <a href="#"><img src="images/add-banners/img-01.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/add-banners/img-02.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/add-banners/img-03.jpg" alt=""></a>
                        </li>
                    </ul>
                </div>
                <!-- Add Banners -->

                <!-- Match Detail Content -->
                <div class="match-detail-content">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="row">

                                <!-- Next Matches -->
                                <div class="col-sm-4 col-xs-5 r-full-width">
                                    <div class="next-matches">
                                        <h4>Proximo Partido</h4>
                                        <div id="matches-detail-slider" class="matches-detail-slider">

                                            <!-- Item -->
                                            <div class="item matches-detail" style="background: url(images/country-flags-bg.jpg);">
                                                <div class="time-left">
                                                    <ul id="countdown-1" class="countdown">
                                                        <li><span class="days">00</span>D:</li>
                                                        <li><span class="hours">00</span>H:</li>
                                                        <li><span class="minutes">00</span>M:</li>
                                                        <li><span class="seconds">00</span>S</li>
                                                    </ul>
                                                </div>
                                                <span class="left-date">12/02/2016 / 19:00</span>
                                                <div class="team-btw-match">
                                                    <ul>
                                                        <li>
                                                            <img src="images/Instituciones Logos/cropped-cvh-deportes-192x192e8e2.png" alt="">
                                                            <span>Vista<span>Hermosa</span></span>
                                                        </li>
                                                        <li>
                                                            <img src="images/Instituciones Logos/photoa6e0.jpg" alt="">
                                                            <span>Colegio<span>Aleman</span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Item -->

                                            <!-- Item -->
                                            <div class="item matches-detail" style="background: url(images/country-flags-bg.jpg);">
                                                <div class="time-left">
                                                    <ul id="countdown-2" class="countdown">
                                                        <li><span class="days">00</span>D:</li>
                                                        <li><span class="hours">00</span>H:</li>
                                                        <li><span class="minutes">00</span>M:</li>
                                                        <li><span class="seconds">00</span>S</li>
                                                    </ul>
                                                </div>
                                                <span class="left-date">12/02/2016 / 19:00</span>
                                                <div class="team-btw-match">
                                                    <ul>
                                                        <li>
                                                            <img src="images/Instituciones Logos/logo-britishb273.jpg" alt="">
                                                            <span>Colegio<span>Americano</span></span>
                                                        </li>
                                                        <li>
                                                            <img src="images/team-logos/img-02.png" alt="">
                                                            <span>Super Team<span>Club</span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Item -->

                                        </div>
                                    </div>
                                </div>
                                <!-- Next Matches -->

                                <!-- Upcoming Fixture -->
                                <div class="col-sm-8 col-xs-7 r-full-width">
                                    <h3><span><i class="red-color">PROXIMOS</i> PARTIDOS</span><a class="view-all pull-right" href="#">Ver mas<i class="fa fa-angle-double-right"></i></a></h3>
                                    <div class="upcoming-fixture">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="logo-width-name"><img src="images/team-logos-small/img-01.png" alt="">Equipo 1</div>
                                                    </td>
                                                    <td class="upcoming-fixture-date"><span>6 Feb 2016 15:00</span></td>
                                                    <td>
                                                        <div class="logo-width-name w-icon"><img src="images/team-logos-small/img-02.png" alt="">Equipo 2</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="logo-width-name"><img src="images/team-logos-small/img-03.png" alt="">Equipo 3</div>
                                                    </td>
                                                    <td class="upcoming-fixture-date"><span>6 Feb 2016 15:00</span></td>
                                                    <td>
                                                        <div class="logo-width-name w-icon"><img src="images/team-logos-small/img-04.png" alt="">Equipo 4</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="logo-width-name"><img src="images/team-logos-small/img-05.png" alt="">Equipo 5</div>
                                                    </td>
                                                    <td class="upcoming-fixture-date"><span>6 Feb 2016 15:00</span></td>
                                                    <td>
                                                        <div class="logo-width-name w-icon"><img src="images/team-logos-small/img-06.png">Equipo 6</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="logo-width-name"><img src="images/team-logos-small/img-07.png" alt="">Equipo 7</div>
                                                    </td>
                                                    <td class="upcoming-fixture-date"><span>6 Feb 2016 15:00</span></td>
                                                    <td>
                                                        <div class="logo-width-name w-icon"><img src="images/team-logos-small/img-08.png" alt="">Equipo 8</div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Upcoming Fixture -->

                                <!-- Latest News -->
                                <div class="col-xs-12">
                                    <div class="latest-news-holder">
                                        <h3><span>Ultimas Noticias</span></h3>

                                        <!-- latest-news Slider -->
                                        <div class="row no-gutters white-bg">

                                            <!-- Slider -->
                                            <div class="col-sm-9">
                                                <ul id="latest-news-slider" class="latest-news-slider">
                                                    <li>
                                                        <img src="images/latest-news/img-01.jpg" alt="">
                                                        <p>Para agregar cualquier texto , descripcion, noticia relevante o voletin de alta importancia<a href="#">leer mas...</a></p>
                                                    </li>
                                                    <li>
                                                        <img src="images/latest-news/img-02.jpg" alt="">
                                                        <p>Para agregar cualquier texto , descripcion, noticia relevante o voletin de alta importancia<a href="#">leer mas...</a></p>
                                                    </li>
                                                    <li>
                                                        <img src="images/latest-news/img-03.jpg" alt="">
                                                        <p>Para agregar cualquier texto , descripcion, noticia relevante o voletin de alta importancia<a href="#">leer mas...</a></p>
                                                    </li>
                                                    <li>
                                                        <img src="images/latest-news/img-04.jpg" alt="">
                                                        <p>Para agregar cualquier texto , descripcion, noticia relevante o voletin de alta importancia<a href="#">leer mas...</a></p>
                                                    </li>
                                                    <li>
                                                        <img src="images/latest-news/img-01.jpg" alt="">
                                                        <p>Para agregar cualquier texto , descripcion, noticia relevante o voletin de alta importancia<a href="#">leer mas...</a></p>
                                                    </li>
                                                    <li>
                                                        <img src="images/latest-news/img-02.jpg" alt="">
                                                        <p>Para agregar cualquier texto , descripcion, noticia relevante o voletin de alta importancia<a href="#">leer mas...</a></p>
                                                    </li>
                                                    <li>
                                                        <img src="images/latest-news/img-03.jpg" alt="">
                                                        <p>Para agregar cualquier texto , descripcion, noticia relevante o voletin de alta importancia<a href="#">leer mas...</a></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Slider -->

                                            <!-- Thumnail -->
                                            <div class="col-sm-3">
                                                <ul id="latest-news-thumb" class="latest-news-thumb">
                                                    <li>
                                                        <p>Noticia 1 informacion general</p>
                                                        <span>Febrero 11, 2016</span>
                                                    </li>
                                                    <li>
                                                        <p>Noticia 2 informacion general</p>
                                                        <span>Febrero 11, 2016</span>
                                                    </li>
                                                    <li>
                                                        <p>Noticia 3 informacion general</p>
                                                        <span>Febrero 11, 2016</span>
                                                    </li>
                                                    <li>
                                                        <p>Noticia 4 informacion general</p>
                                                        <span>Febrero 11, 2016</span>
                                                    </li>
                                                    <li>
                                                        <p>Noticia 5 informacion general</p>
                                                        <span>Febrero 11, 2016</span>
                                                    </li>
                                                    <li>
                                                        <p>Noticia 6 informacion general</p>
                                                        <span>Febrero 11, 2016</span>
                                                    </li>
                                                    <li>
                                                        <p>Noticia 7 informacion general</p>
                                                        <span>Febrero 11, 2016</span>
                                                    </li>
                                                </ul>
                                                <ul class="news-thumb-arrows">
                                                    <li class="prev"><span class="fa fa-angle-up"></span></li>
                                                    <li class="next"><span class="fa fa-angle-down"></span></li>
                                                </ul>
                                            </div>
                                            <!-- Thumnail -->

                                        </div>
                                        <!-- latest-news Slider -->

                                    </div>
                                </div>
                                <!-- Latest News -->

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="row">

                                <!-- Last Match -->
                                <div class="col-lg-12 col-md-12 col-sm-5 col-xs-6 r-full-width">
                                    <div class="last-matches theme-margin-bottom win-tag">
                                        <h4>Ultimo Partido</h4>
                                        <div class="matches-detail style-2" style="background: url(images/keper-img.jpg);">
                                            <p>Campo 1 Sierra Nevada 12/02/2016 / 19:00</p>
                                            <div class="team-btw-match">
                                                <ul>
                                                    <li>
                                                        <img src="images/Instituciones Logos/9999719-300x300e405.png" alt="">
                                                        <span>Northbridge<span>School</span></span>
                                                    </li>
                                                    <li>
                                                        <img src="images/Instituciones Logos/cumbres.gif" alt="">
                                                        <span>Instituto<span>Cumbres</span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="goals-detail">
                                                <ul>
                                                    <li>
                                                        <span>C, Irlandes</span>
                                                        <span>23 (FNA)</span>
                                                    </li>
                                                    <li>
                                                        <span>C. Aleman</span>
                                                        <span>41 (FNA)</span>
                                                    </li>
                                                    <li>
                                                        <span>C. Americano</span>
                                                        <span>59 (FNA)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Last Match -->

                                <!-- Last Match -->
                                <div class="col-lg-12 col-md-12 col-sm-7 col-xs-6 r-full-width">
                                    <div class="last-matches styel-1">
                                        <h3><span>TABLA DE PUNTAJE</span></h3>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Equipo</th>
                                                <th>J</th>
                                                <th>G</th>
                                                <th>P</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Equipo 1</td>
                                                <td>10</td>
                                                <td>12</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Equipo 2</td>
                                                <td>10</td>
                                                <td>12</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Equipo 3</td>
                                                <td>20</td>
                                                <td>15</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Equipo 4</td>
                                                <td>60</td>
                                                <td>10</td>
                                                <td>60</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Equipo 5</td>
                                                <td>30</td>
                                                <td>06</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Equipo 6</td>
                                                <td>12</td>
                                                <td>03</td>
                                                <td>40</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Equipo 7</td>
                                                <td>12</td>
                                                <td>15</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Equipo 8</td>
                                                <td>12</td>
                                                <td>15</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Equipo 9</td>
                                                <td>22</td>
                                                <td>14</td>
                                                <td>22</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- Last Match -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Match Detail Content -->

            </div>
        </section>
        <!-- Match Detail -->

        <!-- Player Features And History -->
        <section class="red-section" style=" background: url(images/red-bg.jpg) no-repeat;">

            <!-- Red Section Heading -->
            <div class="red-sec-heading">
                <div class="container">
                    <h5>Jugador goleador</h5>
                </div>
            </div>
            <!-- Red Section Heading -->

            <!-- Red saection Content -->
            <div class="container">
                <div class="row">

                    <!-- Player Featuer -->
                    <div class="col-sm-6">
                        <div class="theme-padding top-profiler">
                            <img class="player-img animate fadeInLeft" data-wow-delay="0.2s" src="images/player-img.png" alt="">
                            <strong class="number-batch style-1">13</strong>
                            <strong class="number-batch style-2">06</strong>
                        </div>
                    </div>
                    <!-- Player Featuer -->

                    <!-- Player History -->
                    <div class="col-sm-6">
                        <ul id="video-slider" class="video-slider">
                            <li class="red-sec-widget player-history h-white p-white">
                                <h3>Partido relacionado</h3>
                                <p>Para agregar texto y descripcion del articulo, noticia o mencion</p>
                                <div class="player-video-sec">
                                    <div class="video video-post">
                                        <img src="images/video-bg.jpg" alt="">
                                        <span class="play-lable fa fa-video-camera"></span>
                                        <a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="red-sec-widget player-history h-white p-white">
                                <h3>Related Match</h3>
                                <p>The wait for a major title is weighing heavily on Argentina, and it showed as they lost again to Chile, Tim Vickery writes</p>
                                <div class="player-video-sec">
                                    <div class="video video-post">
                                        <img src="images/video-bg-2.jpg" alt="">
                                        <span class="play-lable fa fa-video-camera"></span>
                                        <a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="red-sec-widget player-history h-white p-white">
                                <h3>Related Match</h3>
                                <p>The wait for a major title is weighing heavily on Argentina, and it showed as they lost again to Chile, Tim Vickery writes</p>
                                <div class="player-video-sec">
                                    <div class="video video-post">
                                        <img src="images/video-bg-3.jpg" alt="">
                                        <span class="play-lable fa fa-video-camera"></span>
                                        <a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Player History -->

                </div>
            </div>
            <!-- Red saection Content -->

        </section>
        <!-- Player Features And History -->

        <!-- Facts Accounter -->
        <div class="facts-acounter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pull-right">
                        <ul class="facts-list-acounter" id="tc-counters">
                            <li>
                                <strong class="facts-number" data-from="0" data-to="55" data-speed="1000"></strong>
                                <span>Poseción</span>
                            </li>
                            <li>
                                <strong class="facts-number" data-from="0" data-to="30" data-speed="2000"></strong>
                                <span>Equipo</span>
                            </li>
                            <li>
                                <strong class="facts-number" data-from="0" data-to="1" data-speed="3000"></strong>
                                <span>Partidos ganados</span>
                            </li>
                            <li>
                                <strong class="facts-number" data-from="0" data-to="19" data-speed="4000"></strong>
                                <span>Tiros en el partido</span>
                            </li>
                            <li>
                                <strong class="facts-number" data-from="0" data-to="1" data-speed="5000"></strong>
                                <span>Expulsiones</span>
                            </li>
                            <li>
                                <strong class="facts-number" data-from="0" data-to="3" data-speed="6000"></strong>
                                <span>amonestaciones</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts Accounter -->

        <!-- Gallery And Team -->
        <div class="theme-padding gallery-holder">

            <!-- Gallery v-3 -->
            <div class="theme-padding-bottom">
                <div class="container">

                    <!-- Main Heading -->
                    <h3><span>Galeria de partidos</span></h3>
                    <!-- Main Heading -->

                    <!-- Gallery Columns -->
                    <div class="gallery">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12 r-full-width p-0">
                                    <figure class="gallery-figure">
                                        <img src="images/gallery-v3/img-01.jpg" alt="">
                                        <figcaption class="overlay">
                                            <div class="position-center-center">
                                                <ul class="btn-list">
                                                    <li><a href="images/gallery-v3/img-1-1.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
                                                    <li><a class="fa fa-eye" href="#"></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-6 col-xs-6 r-full-width p-0">
                                    <figure class="gallery-figure">
                                        <img src="images/gallery-v3/img-02.jpg" alt="">
                                        <figcaption class="overlay">
                                            <div class="position-center-center">
                                                <ul class="btn-list">
                                                    <li><a href="images/gallery-v3/img-1-2.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
                                                    <li><a class="fa fa-eye" href="#"></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-6 col-xs-6 r-full-width p-0">
                                    <figure class="gallery-figure">
                                        <img src="images/gallery-v3/img-03.jpg" alt="">
                                        <figcaption class="overlay">
                                            <div class="position-center-center">
                                                <ul class="btn-list">
                                                    <li><a href="images/gallery-v3/img-1-3.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
                                                    <li><a class="fa fa-eye" href="#"></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6 r-full-width p-0">
                                    <figure class="gallery-figure">
                                        <img src="images/gallery-v3/img-04.jpg" alt="">
                                        <figcaption class="overlay">
                                            <div class="position-center-center">
                                                <ul class="btn-list">
                                                    <li><a href="images/gallery-v3/img-1-4.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
                                                    <li><a class="fa fa-eye" href="#"></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-6 col-xs-6 r-full-width p-0">
                                    <figure class="gallery-figure">
                                        <img src="images/gallery-v3/img-05.jpg" alt="">
                                        <figcaption class="overlay">
                                            <div class="position-center-center">
                                                <ul class="btn-list">
                                                    <li><a href="images/gallery-v3/img-1-5.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
                                                    <li><a class="fa fa-eye" href="#"></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-12 col-xs-12 r-full-width p-0">
                                    <figure class="gallery-figure">
                                        <img src="images/gallery-v3/img-06.jpg" alt="">
                                        <figcaption class="overlay">
                                            <div class="position-center-center">
                                                <ul class="btn-list">
                                                    <li><a href="images/gallery-v3/img-1-6.jpg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
                                                    <li><a class="fa fa-link" href="#"></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Columns -->

                </div>
            </div>
            <!-- Gallery v-3 -->

            <!-- Separator -->
            <div class="container text-center">
                <span class="sprater"><i class="fa fa-futbol-o"></i></span>
            </div>
            <!-- Separator -->

            <!-- Team -->
            <div class="container">
                <div class="team-holder theme-padding-top">

                    <!-- Main Heading -->
                    <div class="main-heading-holder">
                        <div class="main-heading">
                            <h2>Jugadores destacados</h2>
                            <p>Para agregar cualquier texto, descripcion y mencion</p>
                        </div>
                    </div>
                    <!-- Main Heading -->

                    <!-- Team Row -->
                    <div id="team-slider" class="team-slider">

                        <!-- Team Column -->
                        <div class="item">
                            <div class="team-column">
                                <img src="images/team/img-01.jpg" alt="">
                                <span class="player-number">12</span>
                                <div class="team-detail">
                                    <h5><a href="team-detail.html">Jugador 1</a></h5>
                                    <span class="desination">Defenza</span>
                                    <div class="detail-inner">
                                        <ul>
                                            <li>Fecha de Nac</li>
                                            <li>Posición</li>
                                            <li>Numero</li>
                                            <li>Equipo</li>
                                            <li>Siguelo en...</li>
                                        </ul>
                                        <ul>
                                            <li>Agosto 31, 1988</li>
                                            <li>Medio</li>
                                            <li>13</li>
                                            <li>Equipo 1</li>
                                            <li>
                                                <ul class="social-icons">
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Team Column -->

                        <!-- Team Column -->
                        <div class="item">
                            <div class="team-column">
                                <img src="images/team/img-02.jpg" alt="">
                                <span class="player-number">12</span>
                                <div class="team-detail">
                                    <h5><a href="team-detail.html">Jugador 2</a></h5>
                                    <span class="desination">Medio</span>
                                    <div class="detail-inner">
                                        <ul>
                                            <li>Fecha de Nac</li>
                                            <li>Posición</li>
                                            <li>Numero</li>
                                            <li>Equipo</li>
                                            <li>Siguelo en...</li>
                                        </ul>
                                        <ul>
                                            <li>Agosto 31, 1988</li>
                                            <li>Medio</li>
                                            <li>13</li>
                                            <li>Equipo 1</li>
                                            <li>
                                                <ul class="social-icons">
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Team Column -->

                        <!-- Team Column -->
                        <div class="item">
                            <div class="team-column">
                                <img src="images/team/img-03.jpg" alt="">
                                <span class="player-number">12</span>
                                <div class="team-detail">
                                    <h5><a href="team-detail.html">Jugador 3</a></h5>
                                    <span class="desination">Delantero</span>
                                    <div class="detail-inner">
                                        <ul>
                                            <li>Fecha de Nac</li>
                                            <li>Posición</li>
                                            <li>Numero</li>
                                            <li>Equipo</li>
                                            <li>Siguelo en...</li>
                                        </ul>
                                        <ul>
                                            <li>Agosto 31, 1988</li>
                                            <li>Medio</li>
                                            <li>13</li>
                                            <li>Equipo 1</li>
                                            <li>
                                                <ul class="social-icons">
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Team Column -->

                        <!-- Team Column -->
                        <div class="item">
                            <div class="team-column">
                                <img src="images/team/img-04.jpg" alt="">
                                <span class="player-number">12</span>
                                <div class="team-detail">
                                    <h5><a href="team-detail.html">Jugador 4</a></h5>
                                    <span class="desination">Portero</span>
                                    <div class="detail-inner">
                                        <ul>
                                            <li>Fecha de Nac</li>
                                            <li>Posición</li>
                                            <li>Numero</li>
                                            <li>Equipo</li>
                                            <li>Siguelo en...</li>
                                        </ul>
                                        <ul>
                                            <li>Agosto 31, 1988</li>
                                            <li>Medio</li>
                                            <li>13</li>
                                            <li>Equipo 1</li>
                                            <li>
                                                <ul class="social-icons">
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Team Column -->

                    </div>
                    <!-- Team Row -->

                </div>
            </div>
            <!-- Team -->

        </div>
        <!-- Gallery And Team -->

        <!-- Products -->
        <div class="products-holder gray-bg theme-padding">
            <div id="product-slider" class="product-slider nav-style-1">

                <!-- Product Column -->
                <div class="product-column">
                    <div class="product-column-inner">
                        <div class="product-img">
                            <img src="images/products/img-01.jpg" alt="">
                        </div>
                        <h5><a href="shop-detail.html">Playera</a></h5>
                        <span class="product-use">Playera deportiva Hombre</span>
                    </div>
                    <div class="btm">
                        <a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        <span class="price">$39.00</span>
                    </div>
                </div>
                <!-- Product Column -->

                <!-- Product Column -->
                <div class="product-column">
                    <div class="product-column-inner">
                        <div class="product-img">
                            <img src="images/products/img-02.jpg" alt="">
                            <span class="sale-batch">sale</span>
                        </div>
                        <h5><a href="shop-detail.html">Copa</a></h5>
                        <span class="product-use">Trofeo Dorado</span>
                    </div>
                    <div class="btm">
                        <a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        <span class="price">$39.00</span>
                    </div>
                </div>
                <!-- Product Column -->

                <!-- Product Column -->
                <div class="product-column">
                    <div class="product-column-inner">
                        <div class="product-img">
                            <img src="images/products/img-03.jpg" alt="">
                        </div>
                        <h5><a href="shop-detail.html">Tenis</a></h5>
                        <span class="product-use">Tenis para Mujer Deportivos</span>
                    </div>
                    <div class="btm">
                        <a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        <span class="price">$39.00</span>
                    </div>
                </div>
                <!-- Product Column -->

                <!-- Product Column -->
                <div class="product-column">
                    <div class="product-column-inner">
                        <div class="product-img">
                            <img src="images/products/img-04.jpg" alt="">
                        </div>
                        <h5><a href="shop-detail.html">Playera</a></h5>
                        <span class="product-use">Playera deportiva hombre</span>
                    </div>
                    <div class="btm">
                        <a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        <span class="price">$39.00</span>
                    </div>
                </div>
                <!-- Product Column -->

                <!-- Product Column -->
                <div class="product-column">
                    <div class="product-column-inner">
                        <div class="product-img">
                            <img src="images/products/img-05.jpg" alt="">
                            <span class="sale-batch">sale</span>
                        </div>
                        <h5><a href="shop-detail.html">Manopla</a></h5>
                        <span class="product-use">Manopla beisball</span>
                    </div>
                    <div class="btm">
                        <a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        <span class="price">$39.00</span>
                    </div>
                </div>
                <!-- Product Column -->

                <!-- Product Column -->
                <div class="product-column">
                    <div class="product-column-inner">
                        <div class="product-img">
                            <img src="images/products/img-06.jpg" alt="">
                        </div>
                        <h5><a href="shop-detail.html">Playera</a></h5>
                        <span class="product-use">Playera deportiva hombre</span>
                    </div>
                    <div class="btm">
                        <a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        <span class="price">$39.00</span>
                    </div>
                </div>
                <!-- Product Column -->

                <!-- Product Column -->
                <div class="product-column">
                    <div class="product-column-inner">
                        <div class="product-img">
                            <img src="images/products/img-01.jpg" alt="">
                        </div>
                        <h5><a href="shop-detail.html">Sports T-Shirt</a></h5>
                        <span class="product-use">Men’s Running Shirt</span>
                    </div>
                    <div class="btm">
                        <a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        <span class="price">$39.00</span>
                    </div>
                </div>
                <!-- Product Column -->

            </div>
        </div>
        <!-- Products -->

    </main>
    <!-- Main Content -->

@endsection