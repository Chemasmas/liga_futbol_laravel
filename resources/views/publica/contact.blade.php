@extends('layout.public')

@section('titulo','Inicio')

@section('content')


<!-- Page Heading & Breadcrumbs  -->
	<div class="page-heading-breadcrumbs">
		<div class="container">
			<h2>contacto</h2>
			<ul class="breadcrumbs">
				<li><a href="#">contacto</a></li>
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

		<!-- Contact -->
		<div class="theme-padding white-bg">
			<div class="container">
			
				<!-- Main Heading -->
				<div class="main-heading-holder">
					<div class="main-heading">
						<h2>contactanos</h2>
						<p>-----------------------------------------------------------------------------------------------</p>
					</div>
				</div>
				<!-- Main Heading -->

				<!-- contact columns -->
				<ul class="row">
					<li class="col-sm-4">
						<div class="address-widget">
							<span class="address-icon"><i class="fa fa-phone"></i></span>
							<h5>nuestros numeros</h5>
							<p>5539441545<span class="red-color">Oficinas</span></p>
							<p>5523738571<span class="red-color">Extenciones</span></p>
							<p>  </p>
						</div>
					</li>
					<li class="col-sm-4">
						<div class="address-widget more-info">
							<span class="address-icon"><i class="fa fa-info"></i></span>
							<h5>mas informacion</h5>
							<strong>Alguna descripcion o Titulo</strong>
							<p>Para agregar algun texto descriptivo o mayores informes</p>
						</div>
					</li>
					<li class="col-sm-4">
						<div class="address-widget office-adderss">
							<span class="address-icon"><i class="fa fa-map-marker"></i></span>
							<h5>Nuestras oficinas</h5>
							<p>Calle Granjas No.45 Colonia palo alto delegacion cuajimalpa C.P. 05110</p>
							<p><i class="red-color fa fa-envelope-o"></i>info@ligaponiente.com</p>
							<p>    </p>
						</div>
					</li>
				</ul>
				<!-- contact columns -->

			</div>
		</div>
		<!-- Contact -->

		<!-- Contact Form Holder -->
		<div class="theme-padding-bottom">
			<div class="container">
				<h2>Envianos un mail</h2> 
				<div class="row">
				
					<!-- Form -->
					<form id="contact-form" class="contact-form col-sm-6">
						<div class="form-group">
					    	<input type="text" class="form-control" required="required" placeholder="Nombre">
					    	<i class="fa fa-user"></i>
					   	</div>
					   	<div class="form-group">
					    	<input type="text" class="form-control" required="required" placeholder="Email *">
					   		<i class="fa fa-envelope"></i>
					   	</div>
					   	<div class="form-group">
					    	<input type="text" class="form-control" required="required" placeholder="Telefono">
					   		<i class="fa fa-phone"></i>
					   	</div>
						<div class="form-group">
							<textarea class="form-control style-d" rows="6" id="comment" placeholder="Escribe un comentario..."></textarea>
							<i class="fa fa-pencil-square-o"></i>
						</div>
					   	<button class="btn red-btn pull-right">Enviar</button>
					</form>
					<!-- Form -->

					<!-- Img -->
					<figure class="col-sm-6 tower-img">
						<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.6771260073147!2d-99.25756668509409!3d19.383128186912586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2011f76732611%3A0x72c142fafce3d146!2sGranjas+45%2C+Granjas+Palo+Alto%2C+05110+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses!2smx!4v1519270682134" width="800" height="433
							" frameborder="0" style="border:0" allowfullscreen></iframe>
					</figure>
					<!-- Img -->

				</div>
			</div>
		</div>
		<!-- Contact Form Holder -->

	</main>
	<!-- Main Content -->

@endsection
