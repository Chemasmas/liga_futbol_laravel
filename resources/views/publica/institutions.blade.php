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
		
<h2 class="wsite-content-title" style="text-align:left;"><font size="3">CLUB MUNDET</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Av Ejército Nacional 1125, Col. Irrigación <br />11500 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.367312864149!2d-99.21379768460841!3d19.4397239868803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20222b00a6cf7%3A0x1e641c31af51acd1!2sClub+Mundet!5e0!3m2!1ses-419!2smx!4v1518761740677" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		
<h2 class="wsite-content-title" style="text-align:left;"><font size="3">CLUB SANTOS LAGUNA</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Universidad Anáhuac, Av Lomas Anáhuac 146, Lomas Anahuac,<br /> 52786 Méx.</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.278529155559!2d-99.2688415846089!3d19.400367986902662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2013832456c13%3A0x3674379b050b2ea!2sClub+Santos+Laguna!5e0!3m2!1ses-419!2smx!4v1518762310509" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO ALEMAN</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Bosques de Moctezuma 124, Fracc. La Herradura, Lomas de la Herradura,<br /> 52784 Naucalpan de Juárez, Méx.</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120842.71274676129!2d-99.3369646151031!3d19.400751421827117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20165e32c38d1%3A0x1d7e4d50ea618579!2sColegio+Alem%C3%A1n+Alexander+Von+Humboldt+A.C.+-+Campus+Prado+Norte+(Herradura)!5e0!3m2!1ses-419!2smx!4v1518762517612" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO ANGLO AMERICANO</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Avenida Jesús del Monte 271, Jesus del Monte,<br /> 52764 Naucalpan de Juárez, Méx.</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.5814626777938!2d-99.29616228460905!3d19.387267086910004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d206db9dc1190b%3A0x303af3b6c955944e!2sColegio+Anglo+Americano+Lomas!5e0!3m2!1ses-419!2smx!4v1518762674687" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO ATID</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Constituyente Carlos Echanove 224, Lomas de Vista Hermosa,<br /> 05100 Cuajimalpa, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4048.141650287343!2d-99.28133402219831!3d19.36992587292412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2072cd550ba0b%3A0x60699f89706323da!2sColegio+Atid!5e0!3m2!1ses-419!2smx!4v1518763025248" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO BOSQUE REAL</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Priv. del Romance Lt.23 Mz.5,<br />Fraccionamiento Bosque Real, Huixquilucan de Degollado, Estado de Mexico</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.442048626316!2d-99.28607068509325!3d19.436498986882103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDI2JzExLjQiTiA5OcKwMTcnMDIuMCJX!5e0!3m2!1ses!2s!4v1459889566862" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO CIUDAD DE MEXICO CONTADERO</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Calle de la Bolsa 456, Cuajimalpa,<br /> 05500 CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15111.138661683399!2d-99.3107680945461!3d19.33818966526612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2076818d9f107%3A0xca32295ac33baa2!2sColegio+Ciudad+de+M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1518763413003" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO CIUDAD DE MEXICO POLANCO</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Calle Christian Andersen 506, Polanco, Polanco V Secc,<br /> 11560 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5883988496785!2d-99.19258528460853!3d19.43018218688556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20002c0000001%3A0x8303b1d3d7635616!2sColegio+Ciudad+de+M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1518763584711" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO D MAZENOD</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Av. Tamaulipas 240 Col.Prados de la Montaña Del. Cuajimalpa Ciudad de México,<br /> DF 05600</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.3011858016725!2d-99.26714748460948!3d19.35610718692782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20743b41780e7%3A0x470fc13a1046c156!2sColegio+Eugenio+de+Mazenod!5e0!3m2!1ses-419!2smx!4v1518763924081" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO EL ROBLE INTERLOMAS</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Av. Jesús del Monte, Num.30, Huixquilucan, Estado de Mexico., Hacienda de las Palmas,<br /> 52763 Ciudad de México, MEX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3700017805013!2d-99.29071068460901!3d19.396412986904885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d206d30edb4369%3A0x5bbd2ae6d4ceb34b!2sColegio+El+Roble!5e0!3m2!1ses-419!2smx!4v1518764160983" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO FRANCO INGLES</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Carretera Al Olivo 686, Lomas de Vista Hermosa,<br /> 05100 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.7060552748976!2d-99.27915108460918!3d19.381876386913156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2012b20d69a37%3A0xde923f94fd855456!2sColegio+Franco+Ingl%C3%A9s+A.C.!5e0!3m2!1ses-419!2smx!4v1518765452554" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO Junipero</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Av. Secretaria de Marina 434, Col. Lomas de Vista Hermosa,<br /> 05121 Ciudad de México, Méx.</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.22580032682504!2d-99.26584421424121!3d19.385911136478065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20125c4ad01d5%3A0xb471351eb06c7e1f!2sAv.+Secretar%C3%ADa+de+Marina+434%2C+Lomas+de+Vista+Hermosa%2C+05129+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1518944853862" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO magen david</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Camino Tecamachalco 370, Cuajimalpa de Morelos, Lomas de Vista hermosa,<br /> 05100 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.7904556882177!2d-99.27947748560902!3d19.378223847439845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d207785a2f4065%3A0x64cc5509a73eaba2!2sColegio+Hebreo+Maguen+David!5e0!3m2!1ses-419!2smx!4v1518945222793" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO merici</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Granjas 45, Granjas Palo Alto,<br /> 05110 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.6770367908184!2d-99.25749268560895!3d19.38313204728446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2011f761e665d%3A0x805bfde3158527c1!2sCOLEGIO+MERICI!5e0!3m2!1ses-419!2smx!4v1518945745985" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO monteverde</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Av. Santa Lucía No. 260, Cuajimalpa de Morelos, Prados de la Montaña,<br /> 05610 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.2926055217526!2d-99.26844088560935!3d19.35647894812728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2004871cbc01d%3A0xa22c4c78e8b53deb!2sColegio+Monteverde!5e0!3m2!1ses-419!2smx!4v1518945957833" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO or hajayim</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Camino Santiago Yanh 17, Jesús del Monte,<br /> 01000 Huixquilucan de Degollado, Estado de México</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30111.70687398107!2d-99.34153385600372!3d19.37073914928348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d207c674d7b0c5%3A0x616f81e36ca8cfed!2sColegio+Or+Hajayim!5e0!3m2!1ses-419!2smx!4v1518946242894" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO tomas moro</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Cerrada Maguey 64, Cuajimalpa,<br /> 05000 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.153133437668!2d-99.29255748560925!3d19.362520947936314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2073a6e41819d%3A0xad45800ce6ae7094!2sColegio+Tomas+Moro!5e0!3m2!1ses-419!2smx!4v1518946508135" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">COLEGIO vista hermosa</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Lomas de Vista Hermosa 221, Lomas de Vista Hermosa,<br /> 05100 Cuajimalpa de Morelos, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.7989213673554!2d-99.27336898560901!3d19.37785744745133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21ce7601f431d%3A0xfc2004e42aaadf03!2sColegio+Vista+Hermosa!5e0!3m2!1ses-419!2smx!4v1518946698568" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
			

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">escuela britanico americana</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Fuente del Niño 16, Lomas de Tecamachalco,<br /> 53950 Naucalpan de Juárez, Mexico</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.611749328631!2d-99.23135228560828!3d19.42917414582604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2022a0f49e14d%3A0x274ad57039cb8b9c!2sBritish+American+School!5e0!3m2!1ses-419!2smx!4v1518947011159" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">escuela eton</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Prados de la Montaña, D García Ramos S/n, Lomas de Santa Fe, Contadero,<br /> 05619 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60217.595586403455!2d-99.277790553803!3d19.38647706494983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdff6739c95103%3A0x7692728bae0d843c!2sEton+School!5e0!3m2!1ses-419!2smx!4v1518947279067" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">escuela myschool</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Cerrada Parque de Alcázar 6, Fracc. Jardines de la Herradura,<br /> 52778 Huxquilucan, MEX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.094466620329!2d-99.27338628560857!3d19.408323946486853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2014939859533%3A0x5e2c614f377d366b!2sMy+School!5e0!3m2!1ses-419!2smx!4v1518947541355" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">colegio peterson</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Calle Camino And. Huizachito 80, Huizachito,<br /> 05249 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60223.149092353204!2d-99.31494712089842!3d19.37145530000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2011b179472af%3A0xb99cba9895932dcf!2sPeterson+School+Cuajimalpa!5e0!3m2!1ses-419!2smx!4v1518948043238" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">escuela sierra nevada</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Camino Cuajimalpa-Palo Solo 1, Hacienda de Las Palmas,<br /> 52763 Huixquilucan de Degollado, MEX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.4400717860913!2d-99.2928750856088!3d19.393382846959987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d206c59d168325%3A0xfa83231c4fa8672e!2sEscuela+Sierra+Nevada!5e0!3m2!1ses-419!2smx!4v1518948441207" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		

<h2 class="wsite-content-title" style="text-align:left;"><font size="3">instituto cumbres</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Loma del Recuerdo 50, Lomas de Vista Hermosa,<br /> 05100 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.7175992006005!2d-99.27081938560906!3d19.381376847340018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2012869119eeb%3A0x99798643952def81!2sInstituto+Cumbres+M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1518948696251" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
	
	
<h2 class="wsite-content-title" style="text-align:left;"><font size="3">instituto irlandes</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Av. Fuente de Los Leones 107, Lomas Hipodromo,<br /> 53950 Naucalpan de Juárez, Méx.</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.694862339644!2d-99.24233598560834!3d19.42558574593974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2017e6ef5cdc9%3A0x1944b70fb2c58e51!2sInstituto+Irland%C3%A9s+M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1518949215570" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
		
		
		
		
<h2 class="wsite-content-title" style="text-align:left;"><font size="3">instituto pinecrest</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Francisco J. Serrano 104, Lomas de Santa Fe, Contadero,<br /> 05348 Santa Fé, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.2171452873113!2d-99.26809498560934!3d19.359748148023932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d200c647e60569%3A0x3bc5ccffe01a1027!2sPinecrest+Institute!5e0!3m2!1ses-419!2smx!4v1518949452112" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">

	
	

		
		
<h2 class="wsite-content-title" style="text-align:left;"><font size="3">instituto regina</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Rivera de Cupia 70, Real de las Lomas,<br /> 11920 Ciudad de México, CDMX<br /></font></div>

<div><div id="746749085678416649" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3226450240268!2d-99.24106688560879!3d19.398460646799318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20109584cf1f7%3A0xd82d6dcd211c4e22!2sInstituto+Mexicano+Regina!5e0!3m2!1ses-419!2smx!4v1518949757843" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.330178642526%; padding:0 20px;">
					



<h2 class="wsite-content-title" style="text-align:left;"><font size="3">instituto rosedal</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Loma del Recuerdo 50, Lomas de Vista Hermosa,<br /> 05100 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60210.05272907715!2d-99.27582920372345!3d19.40686195184014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201286b167e61%3A0x4ebbcd958b0b7796!2sINSTITUTO+ROSEDAL+M%C3%89XICO!5e0!3m2!1ses-419!2smx!4v1518950050957" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">
					



<h2 class="wsite-content-title" style="text-align:left;"><font size="3">colegio tomas moro lomas</font></h2>
<div class="paragraph" style="text-align:left;"><font size="3" color="#2a2a2a">Castillo de Chapultepec 110, Lomas de Reforma,<br /> 11930 Ciudad de México, CDMX</font></div>

<div><div id="428824268679595785" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30109.682503615466!2d-99.28024495599324!3d19.381692146162735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2010a7b8e5b71%3A0x65ef54f1e3d8a793!2sComunidad+Educativa+Tom%C3%A1s+Moro!5e0!3m2!1ses-419!2smx!4v1518950431796" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td> <td class="wsite-multicol-col" style="width:33.339642714949%; padding:0 20px;">


	

<h2 class="wsite-content-title"><font size="3">kinder oakhill</font></h2>
<div class="paragraph"><font color="#2a2a2a"><font size="3"><span>Loma del Recuerdo 50, Lomas de Vista Hermosa,</span></font><br /><span><font size="3">&#8203; 05100 Ciudad de México, CDMX</font></span></font></div>
<div><div id="826094171357939767" align="center" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15054.967198570424!2d-99.26882307568971!3d19.38032958294677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x20ccdd19ac9c6d19!2sOakhill+Preschool+M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1518950989367" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

</td>			</tr>
		</tbody>
	</table>
</div></div></div>


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
