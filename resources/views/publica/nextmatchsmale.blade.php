@extends('layout.public')

@section('titulo','Inicio')

@section('content')
	<!-- Page Heading & Breadcrumbs  -->
	<div class="page-heading-breadcrumbs">
		<div class="container">
			<h2>Proximos partidos varonil</h2>
			<ul class="breadcrumbs">
				<li><a href="#">Proximos</a></li>
				<li>Proximos Partidos varonil</li>
			</ul>
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	<div class="inner-banner style-2 overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/underconstraction-bg.jpg">
		<div class="container">
			<div class="pager-heading match-detail white-heading">
				<span class="pull-left"><img src=".png" alt=""></span>
				<div class="match-vs-heading position-center-center">
					<div class="left-tiem-acounter">
						<ul id="countdown-3" class="countdown">
							<li><span class="days">00</span>D:</li>
							<li><span class="hours">00</span>H:</li>
							<li><span class="minutes">00</span>M:</li>
							<li><span class="seconds">00</span>S</li>
						</ul>
					</div>
					<span class="result-vs">vs</span>
					<div class="location-marker">
						<ul>
							<li><em class="fa fa-map-marker"></em> dia/mes/Año  Hora (pm)</li>
							<li><i class="fa fa-map-marker"></i>Lugar</li>
						</ul>
					</div>
				</div>
				<span class="pull-right"><img src=".png" alt=""></span>
			</div>
		</div>
	</div>
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Match -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">

					<!-- match Contenet -->
					<div class="matches-shedule-holder">
						<div class="col-lg-9 col-sm-8">

							<!-- Matches Dates Shedule -->
							<div class="matches-dates-shedule">
								<ul>
									@foreach($partidos as $partido)
										<li>
										<span class="pull-left">
											<img src="{{asset($partido->equipol->institucione->escudo)}}" alt="" height="60px">
										</span>
											<span class="pull-right">
											<img src="{{asset($partido->equipov->institucione->escudo)}}" alt="" height="60px">
										</span>
											<div class="detail">
												<a href="#">
													Detalles de Partido
												</a>
												<strong>
													{{$partido->equipol->nombre}}
													<em class="red-color"> {{$partido->fecha}} {{$partido->hora}}</em>
													{{$partido->equipov->nombre}}
												</strong>
												<span class="location-marker">
												<em class="fa fa-map-marker">

												</em>
													{{$partido->campo}}
											</span>
											</div>
										</li>
									@endforeach
								</ul>
							</div>
							<!-- Matches Dates Shedule -->

							<!-- Pagination -->
							<div class="pagination-holder">
								<ul class="pagination">
									<li><a href="#"><i class="fa fa-angle-double-left"></i>Previous</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">7</a></li>
									<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
									<li><a href="#">28</a></li>
									<li><a href="#">Next<i class="fa fa-angle-double-right"></i></a></li>
								</ul>
							</div>
							<!-- Pagination -->

						</div>
					</div>
					<!-- match Contenet -->

					<!-- Aside -->
					<div class="col-lg-3 col-sm-4">

						<!-- Aside Widget -->
						<div class="aside-widget">
							<a href="#"><img src="images/Anuncio.jpeg" alt=""></a>
						</div>
						<!-- Aside Widget -->

						<!-- Aside Widget -->
						<div class="aside-widget">
							<h3><span>Categorias</span></h3>
							<div class="Popular-news">
								<ul>
									<li>
										<img src="images/LOGo final vertical.png" alt="" width="50">
										<h5><a href="#">Categoria 1</a></h5>
										<h5><a href="#">ir </a></h5>
									</li>
									<li>
										<img src="images/LOGo final vertical.png" alt="" width="50">
										<h5><a href="#">categoria 2</a></h5>
										<h5><a href="#">ir</a></h5>
									</li>
									<li>
										<img src="images/LOGo final vertical.png" alt="" width="50">
										<h5><a href="#">categoria 3</a></h5>
										<h5><a href="#">ir </a></h5>
									</li>
									<li>
										<img src="images/LOGo final vertical.png" alt="" width="50">
										<h5><a href="#">categoria 4</a></h5>
										<h5><a href="#">ir </a></h5>
									</li>
								</ul>
							</div>
						</div>
						<!-- Aside Widget -->

						<!-- Aside Widget -->
						<div class="aside-widget">
							<h3><span>relacionados</span></h3>
							<div class="Popular-news">
								<ul>
									<li>
										<img src="images/LOGo final vertical.png" alt="" width="50">
										<h5><a href="nextmatchsmale.html">proximos partidos</a></h5>
										<span class="red-color"><i class="fa fa-clock-o"></i>Fechas</span>
									</li>
									<li>
										<img src="images/LOGo final vertical.png" alt="" width="50">
										<h5><a href="matchresultmale.html">resultados de partidos</a></h5>
										<span class="red-color"><i class="fa fa-clock-o"></i>Fechas</span>
									</li>
								</ul>
							</div>
						</div>
						<!-- Aside Widget -->

						<!-- Aside Widget -->
						<div class="aside-widget">
							<h3><span>Calendario</span></h3>
							<div id="calendar" class="calendar"></div>
						</div>
						<!-- Aside Widget -->

					</div>
					<!-- Aside -->

				</div>
			</div>
		</div>
		<!-- Match -->

	</main>
	<!-- Main Content -->


	@endsection