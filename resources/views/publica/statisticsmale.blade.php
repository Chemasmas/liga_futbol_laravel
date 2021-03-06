@extends('layout.public')

@section('titulo','Inicio')

@section('content')
	<!-- Page Heading & Breadcrumbs  -->
	<div class="page-heading-breadcrumbs">
		<div class="container">
			<h2>Estadisticas Varonil</h2>
			<ul class="breadcrumbs">
				<li><a href="#">Estadisticas</a></li>
				<li><a href="#">Estadisticas Varonil</a></li>
			</ul>
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	<div class="inner-banner style-2 overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/underconstraction-bg.jpg">
		<div class="container theme-padding">
			<ul id="match-detail-slider" class="match-detail-slider">
				<li>
					<div class="pager-heading match-detail h-white">
						<span class="pull-left win-tag"><img src="" alt=""></span>
						<div class="vs-match-heading position-center-center"><strong class="vs-match-result">3<span>Vs</span>1</strong> <span class="end-time"><em class="fa fa-clock-o"></em>13:57 min (IST)</span></div>
						<span class="pull-right loss-tag"><img src="" alt=""></span>
					</div>
				</li>
				<li>
					<div class="pager-heading match-detail h-white">
						<span class="pull-left win-tag"><img src="" alt=""></span>
						<div class="vs-match-heading position-center-center">
							<strong class="vs-match-result">3<span>Vs</span>1</strong>
							<span class="end-time"><i class="fa fa-clock-o"></i>13:57 min (IST)</span>
						</div>
						<span class="pull-right loss-tag"><img src="" alt=""></span>
					</div>
				</li>
				<li>
					<div class="pager-heading match-detail h-white">
						<span class="pull-left win-tag"><img src="" alt=""></span>
						<div class="vs-match-heading position-center-center"><strong class="vs-match-result">3<span>Vs</span>1</strong> <span class="end-time"><em class="fa fa-clock-o"></em>13:57 min (IST)</span></div>
						<span class="pull-right loss-tag"><img src="" alt=""></span>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">	

		<!-- Match Result -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">

					<!-- Aside -->
					<div class="col-lg-3 col-sm-4">

						<!-- Aside Widget -->
						<div class="aside-widget">
							<a href="#"><img src="/images/Anuncio.jpeg" alt=""></a>
						</div>
						<!-- Aside Widget -->

						<!-- Aside Widget -->
						<div class="aside-widget">
							<h3><span>Categorias</span></h3>
							<div class="Popular-news">
								<ul>
									@foreach($torneosA as $torneo)
										<li>
											<img src="/images/LOGo final vertical.png" alt="" width="50">
											<h5><a href="{{action('HomeController@statisticsmale',["idT"=>$torneo->id])}}">
													{{$torneo->nombre}}
												</a></h5>
											<h5><a href="#">ir </a></h5>
										</li>
									@endforeach
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
										<img src="/images/LOGo final vertical.png" alt="" width="50">
										<h5><a href="nextmatchs.html">proximos partidos</a></h5>
										<span class="red-color"><i class="fa fa-clock-o"></i>Fechas</span>
									</li>
									<li>
										<img src="/images/LOGo final vertical.png" alt="" width="50">
										<h5><a href="#">resultados de partidos</a></h5>
										<span class="red-color"><i class="fa fa-clock-o"></i>Fechas</span>
									</li>
								</ul>
							</div>
						</div>
						<!-- Aside Widget -->
						
						
					</div>
					<!-- Aside -->
					
					<!-- Match Result Contenet -->
					<div class="col-lg-9 col-sm-8">

						<!-- Piont Table -->
						<div class="macth-fixture">
						  <h5>{{$torneoCurr->nombre}}</h5>
						  <div class="last-matches styel-3">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
									    <thead>
									    	<tr>
										        <th>Tabla</th>
										        <th>Equipos</th>
												<th>Partidos Jugados</th>
												<th>Ganados</th>
												<th>Perdidos</th>
												<th>Empates</th>
												<th>Diferencia de Goles</th>
												<th>Puntos</th>
									      	</tr>
									    </thead>
									    <tbody>
                                        <?php $i=1; ?>
										@foreach($estadisticas as $estadistica)
											@if($estadistica->equipo->nombre!="BYE")
											<tr>
												<td>{{$i++}}</td>
												<td><img src="/{{$estadistica->equipo->institucione->escudo}}" alt="" height="50px">{{$estadistica->equipo->nombre}}</td>
												<td>{{intval($estadistica->PartidosJugados)}}</td>
												<td>{{intval($estadistica->PartidosGanados)}}</td>
												<td>{{intval($estadistica->PartidosPerdidos)}}</td>
												<td>{{intval($estadistica->PartidosEmpatados)}}</td>
												<td>{{intval($estadistica->DiferenciaGoles)}}</td>
												<td>{{intval($estadistica->Puntos)}}</td>
											</tr>
											@endif
										@endforeach
									    </tbody>
								  	</table>
							  	</div>
							</div>
						</div>
						<!-- Piont Table -->

					</div>
					<!-- Match Result Contenet -->

				</div>
			</div>
		</div>
		<!-- Match Result -->

	</main>
	<!-- Main Content -->

	@endsection