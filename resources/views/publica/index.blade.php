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
										<h1 class="animated fadeInUp delay-1s">Proximos<br>Partidos<br></h1>
										<p class="animated fadeInUp delay-2s">para agregar texto</p>
										<a class="btn lg red-btn animated fadeInRight delay-3s" href="#"><i>+</i>leer mas</a>
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
										<h1 class="animated fadeInUp delay-1s">Estadisticas de<br>jornada actual<br></h1>
										<p class="animated fadeInUp delay-2s">para agregar texto</p>
										<a class="btn lg red-btn animated fadeInRight delay-3s" href="#"><i>+</i>leer mas</a>
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
										<h1 class="animated fadeInUp delay-1s">Convocatorias<br>Inscripciones<br>abiertas</h1>
										<p class="animated fadeInUp delay-2s">para agregar texto</p>
										<a class="btn lg red-btn animated fadeInRight delay-3s" href="#"><i>+</i>leer mas</a>
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
					<h1>Futbol<br> con valores</h1>
					<p>para agregar texto titulo o mencion<br> texto en general</p>
					<ul class="btn-list">
						<li><a class="btn lg red-btn" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]">Ver video<i class="fa fa-play-circle"></i></a></li>
						<li><a class="btn lg red-btn" href="#">Mas videos<i class="fa fa-angle-right"></i></a></li>
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
							<span class="pull-left win-tag"><img src="images/Instituciones Logo/cropped-cvh-deportes-192x192e8e2.png" alt=""></span>
							<div class="vs-match-heading position-center-center"><strong class="vs-match-result">3<span>Vs</span>1</strong> <span class="end-time"><em class="fa fa-clock-o"></em>13:57 min</span></div>
							<span class="pull-right loss-tag"><img src="images/Instituciones Logo/photoa6e0.jpg" alt=""></span>
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
					<li><span><i class="fa fa-sliders"></i>Slides</span></li>
					<li> <span><i class="fa fa-play-circle"></i>Videos</span> </li>
					<li> <span><i class="fa fa-soccer-ball-o"></i>Destacados</span></li>
					<li><span><i class="fa fa-bar-chart"></i>Resultados</span></li>
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
				</div>
				<!-- Add Banners -->

				<!-- Match Detail Content -->
				<div class="match-detail-content">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						  <div class="row">

								<!-- Next Matches -->
								<div class="col-sm-4 col-xs-5 r-full-width">
									<div class="next-matches"><h4>prox partidos</h4> 

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
															<img src="images/team-logos/img-01.png" alt="">
															<span>Footbal<span>Team</span></span>
														</li>
														<li>
														  <img src="images/team-logos/img-02.png" alt="">
															<span>Super Team<span>Club</span></span>
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
															<img src="images/team-logos/img-01.png" alt="">
															<span>Footbal<span>Team</span></span>
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
								  <h3><span><em class="red-color">JORNADAS </em>ACTUALES</span><a class="view-all pull-right" href="#">Ver mas<em class="fa fa-angle-double-right"></em></a></h3>
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
												        	<div class="logo-width-name w-icon"><img src="images/team-logos-small/img-06.png" alt="">Equipo 6</div>
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
								</div>
								<!-- Latest News -->

						  </div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="row">

<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=370&amp;wkst=2&amp;bgcolor=%23ff0000&amp;src=ligaponiente.callendar%40gmail.com&amp;color=%231B887A&amp;src=es.mexican%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FMexico_City" style="border-width:1" width="200" height="370" frameborder="1" scrolling="si"></iframe>				<!-- Match Detail Content -->

			</div>
		</section>
		<!-- Match Detail -->
		<!-- Gallery And Team -->
		<div class="theme-padding gallery-holder">
			
			<!-- Gallery v-3 -->
			<div class="theme-padding-bottom">
				<div class="container">

					<!-- Main Heading -->
						<br>
					    <a href="gallery.html"><h4>Galeria</h4></a>
					    </br>

					<!-- Main Heading -->

					<!-- Gallery Columns -->
					<div class="gallery">
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-12 col-xs-12 r-full-width p-0">
									<figure class="gallery-figure">
										<img src="images/gallery-v3/imagen 1.jpeg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/imagen 1.jpeg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
													<li><a class="fa fa-eye" href="#"></a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<div class="col-sm-6 col-xs-6 r-full-width p-0">
									<figure class="gallery-figure">
										<img src="images/gallery-v3/imagen 4.jpeg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/imagen 4.jpeg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
													<li><a class="fa fa-eye" href="#"></a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<div class="col-sm-6 col-xs-6 r-full-width p-0">
									<figure class="gallery-figure">
										<img src="images/gallery-v3/imagen 5.jpeg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/imagen 5.jpeg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
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
										<img src="images/gallery-v3/imagen 2.jpeg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/imagen 2.jpeg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
													<li><a class="fa fa-eye" href="#"></a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<div class="col-sm-6 col-xs-6 r-full-width p-0">
									<figure class="gallery-figure">
										<img src="images/gallery-v3/imagen 3.jpeg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/imagen 3.jpeg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
													<li><a class="fa fa-eye" href="#"></a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<div class="col-sm-12 col-xs-12 r-full-width p-0">
									<figure class="gallery-figure">
										<img src="images/gallery-v3/imagen 6.jpeg" alt="">
										<figcaption class="overlay">
											<div class="position-center-center">
												<ul class="btn-list">
													<li><a href="images/gallery-v3/imagen 6.jpeg" data-rel="prettyPhoto[gallery-v3]"><i class="fa fa-search"></i></a></li>
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

		<!-- Player Features And History -->
		<section class="red-section" style=" background: url(images/red-bg.jpg) no-repeat;">

			<!-- Red Section Heading -->
			<div class="red-sec-heading">
				<div class="container">
				  <h5>Jugador destacado</h5>
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
								<h3>Partidos relacionados</h3>
								<p>Para agregar texto, mencion o noticia</p>
								<div class="player-video-sec">
									<div class="video video-post">
										<img src="images/video-bg.jpg" alt="" width="547">
										<span class="play-lable fa fa-video-camera"></span>
										<a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
									</div>
								</div>
							</li>
							<li class="red-sec-widget player-history h-white p-white">
								<h3>partidos relacionados</h3>
								<p>Para agregar texto, mencion o noticia</p>
								<div class="player-video-sec">
									<div class="video video-post">
										<img src="images/video-bg-2.jpg" alt="">
										<span class="play-lable fa fa-video-camera"></span>
										<a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
									</div>
								</div>
							</li>
							<li class="red-sec-widget player-history h-white p-white">
								<h3>Partidos Relacionados</h3>
								<p>Para agregar texto, mencion o noticia</p>
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
								<strong class="facts-number" data-from="0" data-to="550" data-speed="1000"></strong>
								<span>Posesion</span>
							</li>
							<li>
								<strong class="facts-number" data-from="0" data-to="30" data-speed="2000"></strong>
								<span>Team Members</span>
							</li>
							<li>
								<strong class="facts-number" data-from="0" data-to="158" data-speed="3000"></strong>
								<span>Partidos Ganados</span>
							</li>
							<li>
								<strong class="facts-number" data-from="0" data-to="199" data-speed="4000"></strong>
								<span>tiros a gol</span>
							</li>
							<li>
								<strong class="facts-number" data-from="0" data-to="1254" data-speed="5000"></strong>
								<span>expulciones</span>
							</li>
							<li>
								<strong class="facts-number" data-from="0" data-to="32" data-speed="6000"></strong>
								<span>faltas</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Facts Accounter -->


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
							<p>para agregar texto y menciones</p>
						</div>
					</div>
					<!-- Main Heading -->

					<!-- Team Row -->
					<div id="team-slider" class="team-slider">

						<!-- Team Column -->
						<div class="item">
							<div class="team-column">
								<img src="images/team/img-01.jpg" alt="">
								<span class="player-number">1</span>
								<div class="team-detail">
									<h5><a href="team-detail.html">Jugador 1</a></h5>
									<span class="desination">Defensa</span>
									<div class="detail-inner">
										<ul>
											<li>Equipo</li>
											<li>Posición</li>
											<li>Goles</li>
											<li>Asistencias</li>
										</ul>
										<ul>
											<li>Equipo 1</li>
											<li>Defensa</li>
											<li>13</li>
											<li>Atletico Nacional</li>
											<li>
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
								<span class="player-number">2</span>
								<div class="team-detail">
									<h5><a href="team-detail.html">jugador 2</a></h5>
									<span class="desination">Medio</span>
									<div class="detail-inner">
										<ul>
											<li>Equipo</li>
											<li>Posición</li>
											<li>Goles</li>
											<li>Asistencias</li>
										</ul>
										<ul>
											<li>Equipo 1</li>
											<li>Defensa</li>
											<li>13</li>
											<li>Atletico Nacional</li>
											<li>
											</li>
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
								<span class="player-number">3</span>
								<div class="team-detail">
									<h5><a href="team-detail.html">jugador 3</a></h5>
									<span class="desination">Delantero</span>
									<div class="detail-inner">
										<ul>
											<li>Equipo</li>
											<li>Posición</li>
											<li>Goles</li>
											<li>Asistencias</li>
										</ul>
										<ul>
											<li>Equipo 1</li>
											<li>Defensa</li>
											<li>13</li>
											<li>Atletico Nacional</li>
											<li>
											</li>
									</div>
								</div>
							</div>
						</div>
						<!-- Team Column -->

						<!-- Team Column -->
						<div class="item">
							<div class="team-column">
								<img src="images/team/img-04.jpg" alt="">
								<span class="player-number">4</span>
								<div class="team-detail">
									<h5><a href="team-detail.html">Jugador 4</a></h5>
									<span class="desination">portero</span>
									<div class="detail-inner">
										<ul>
											<li>Equipo</li>
											<li>Posición</li>
											<li>Goles</li>
											<li>Asistencias</li>
										</ul>
										<ul>
											<li>Equipo 1</li>
											<li>Defensa</li>
											<li>13</li>
											<li>Atletico Nacional</li>
											<li>
											</li>
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
						<h5><a href="shop-detail.html">playera deportiva</a></h5>
						<span class="product-use">para hombre</span>
					</div>
					<div class="btm">
						<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>agregar</a>
						<span class="price">$39.00</span>
					</div>
				</div>
				<!-- Product Column -->

				<!-- Product Column -->
				<div class="product-column">
					<div class="product-column-inner">
						<div class="product-img">
							<img src="images/products/img-02.jpg" alt="">
							<span class="sale-batch">venta</span>
						</div>
						<h5><a href="shop-detail.html">copa </a></h5>
						<span class="product-use">torneo de futbol</span>
					</div>
					<div class="btm">
						<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Agregar</a>
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
						<h5><a href="shop-detail.html">tenis sport</a></h5>
						<span class="product-use">para hombre</span>
					</div>
					<div class="btm">
						<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Agregar </a>
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
						<h5><a href="shop-detail.html">playera deportiva</a></h5>
						<span class="product-use">para hombre</span>
					</div>
					<div class="btm"><a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Agregar </a> <span class="price">$39.00</span></div>
				</div>
				<!-- Product Column -->

				<!-- Product Column -->
				<div class="product-column">
					<div class="product-column-inner">
						<div class="product-img">
							<img src="images/products/img-05.jpg" alt="">
							<span class="sale-batch">Venta</span>
						</div>
						<h5><a href="shop-detail.html">Guantes de portero</a></h5>
						<span class="product-use">para futbol</span>
					</div>
					<div class="btm">
						<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Agregar </a>
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
						<h5><a href="shop-detail.html">Sports T-Shirt</a></h5>
						<span class="product-use">Men’s Running Shirt</span>
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
						<h5><a href="shop-detail.html">Playera Deportiva</a></h5>
						<span class="product-use">Para Hombre</span>
					</div>
					<div class="btm">
						<a class="btn" href="shop-detail.html"><i class="fa fa-shopping-cart"></i>Agregar</a>
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