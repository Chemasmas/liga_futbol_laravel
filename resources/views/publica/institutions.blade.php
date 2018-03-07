@extends('layout.public')

@section('titulo','Instituciones')

@section('content')

	<!-- Page Heading & Breadcrumbs  -->
	<div class="page-heading-breadcrumbs">
		<div class="container">
			<h2>Instituciones</h2>
			<ul class="breadcrumbs">
				<li><a href="/directory">Directorio</a></li>
				<li>Instituciones</li>
			</ul>
		</div>
	</div>
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	<div class="overlay-dark theme-padding parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/underconstraction-bg.jpg">
	</div>
	<!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Directory Maps -->
		@foreach($instituciones as $institucion)
			<h2 class="wsite-content-title" style="text-align:left;"><font size="3">{{$institucion->nombre}}</font></h2>
			<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">{!! $institucion->dir !!}</font></div>

			<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml">
					{!! $institucion->mapa !!}
				</div></div>

			<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
				<hr class="styled-hr" style="width:100%;"></hr>
				<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

			</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		@endforeach

<div><div class="wsite-multicol"><div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
	<table class="wsite-multicol-table">
		<tbody class="wsite-multicol-tbody">
			<tr class="wsite-multicol-tr">
				<td class="wsite-multicol-col" style="width:33.333333333333%; padding:0 15px;">
					
						


</div>

		<!-- 404 Error -->

	</main>
	<!-- Main Content -->

@endsection
