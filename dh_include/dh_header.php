<?php
	$link0 = 'index.php';
	$link1 = 'publicaciones.php';
	$link2 = 'portafolio.php';
	$link3 = 'nosotros.php';
	$link4 = 'team.php';
	$link5 = 'contactanos.php';

echo '
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> devHuayra | Soluciones TI </title>
		<!--link rel="shortcut icon" type="image/ico" href="assets/img/icon.png"-->
		<link rel="shortcut icon" type="image/ico" href="assets/img/logo-devhuayra.png">

		<meta name="viewport" content="initial-scale=1, maximum-scale=1">

		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link href="assets/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

		<!--Display Stand alone>
		<meta name="mobile-web-app-capable" content="yes">
		<link rel="manifest" href="assets/js/manifest.json">
		<END Display Stand alone-->

		<style>
			@import url("https://fonts.googleapis.com/css?family=Open+Sans:300&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese");
			@import url("https://fonts.googleapis.com/css?family=Open+Sans:300");
			@import url("https://fonts.googleapis.com/css?family=Pattaya");
		</style>
	</head>

	<!--logo-->
	<div class="logo-dh">
		<h1 class="centro">devHuayra</h1>
	</div>
	<!--END logo-->

	<!--navbar Web-->
	<nav class="navprincipal">
		<ul style="right: 0;/*float:right;margin-right: 50px;*/";>
			<a href="'.$link0.'" class="dropdown">
				<li class='.$act0.'><i class="mdi mdi-home"></i> Inicio</li>
			    <div class="dropdown-content">
				   <a href="#">Link 1</a>
				   <a href="#">Link 2</a>
				   <a href="#">Link 3</a>
			    </div>
			</a>
			<a href="'.$link1.'">
				<li class='.$act1.'><i class="mdi mdi-earth"></i> Publicaciones</li>
			</a>
			<a href="'.$link2.'">
				<li class='.$act2.'><i class="mdi mdi-briefcase-check"></i> Portafolio</li>
			</a>
			<a href="'.$link3.'">
				<li class='.$act3.'><i class="mdi mdi-information"></i> devHuayra?</li>
			</a>
			<a href="'.$link4.'">
				<li class='.$act4.'><i class="mdi mdi-account-multiple"></i> Team</li>
			</a>
			<a href="'.$link5.'">
				<li class='.$act5.'><i class="mdi mdi-message-text"></i> Contáctanos</li>
			</a>
			<a>
				<li>
					<input type="" placeholder="Busqueda" style="padding: 3px; border-radius: 5px; font-size: 13px; font-weight: 600;">
				</li>
			</a>
			<!--a href="" style="color:white; text-decoration: none; border: solid 2px white; padding: 5px 10px 5px 10px;border-radius: 2px; margin: 0px 10px 0px 10px">
				<i class="mdi mdi-account-key"></i> Ingresar
			</a-->
			<!--a href="">login</a-->
		</ul>
	</nav>
	<!--END navbar Web-->

	<!--navbar Movil-->
	<nav class="navprincipal-movil">
		<ul style="padding-left: 0px; margin-right: 0px;">
			<a href="'.$link0.'">
				<li class='.$act0.'><i class="mdi mdi-home"></i></li>
			</a>
			<a href="'.$link1.'">
				<li class='.$act1.'><i class="mdi mdi-earth"></i></li>
			</a>
			<a href="'.$link2.'">
				<li class='.$act2.'><i class="mdi mdi-briefcase-check"></i></li>
			</a>
			<a href="'.$link3.'">
				<li class='.$act3.'><i class="mdi mdi-information"></i></li>
			</a>
			<a href="'.$link4.'">
				<li class='.$act4.'><i class="mdi mdi-account-multiple"></i></li>
			</a>
			<a href="'.$link5.'">
				<li class='.$act5.'><i class="mdi mdi-message-text"></i></li>
			</a>
			
			<!--a href="">login</a-->
		</ul>
	</nav>
	<!-- END navbar Mobil-->


	<!--div width="100">
		<img class="img-bg" src="assets/img/bg.jpg" width="100%">
	</div-->

	<!--icon flotante-->
	<!--a href="" class="icon-flotante" onclick="myFunction()">
		<i class="mdi mdi-message-text" style="font-size: 22px"></i> 
	</a-->
	<div id="iconflot" class="icon-flotante" style="display:none">
			Contáctanos
		<form>
			<div style="margin:2px;">
				<input type="" name="" placeholder="Nombres">
			</div>
			<div style="margin:2px;">
				<input type="" name="" placeholder="Nombres">
			</div>
			<div style="margin:2px;">
				<textarea>
					
				</textarea>
			</div>
			<div>
				<input type="button" name="" value="Enviar">
			</div>
		</form>
	</div>

	<a class="icon-flotante" onclick="myFunction()" style="border: solid: 1px black">
		<i class="mdi mdi-message-text" style="font-size: 22px"></i> 
	</a>
	<!--END icon flotante-->

	<!--END navbar-->
	<body class="scrollbar" id="style-3">
		<div class="espacio-arriba"></div>
';
?>