<!DOCTYPE html>
<html lang="es">
<head>
	<title>Happy Day</title>

	<!-- Metadatos -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<!-- Fonts -->
	<link rel="stylesheet" href="<?php echo $url . 'fonts/lobster/lobster.css' ?>">
	<link rel="stylesheet" href="<?php echo $url . 'fonts/open-sans/open-sans.css' ?>">
	<link rel="stylesheet" href="<?php echo $url . 'fonts/icomoon/style.css' ?>">
	
	<!-- Hojas de estilos -->
	<link rel="stylesheet" href="<?php echo $url . 'css/normalize.css' ?>">
	<link rel="stylesheet" href="<?php echo $url . 'css/estilos.css' ?>">
	<link rel="stylesheet" href="<?php echo $url . 'css/respond.css' ?>">
</head>
<body>
	
	<!-- Cabecera -->
		<header class="header-wrapper">
			<div class="menu-wrapper">
				<div class="carrito-wrapper">
					<a href="<?php echo $url . 'carrito.php' ?>">
						<img src="<?php echo $url . 'img/corporativa.jpg' ?>" alt="Carrito de compra" class="inline-block">
					</a>
					<span clas="inline-block">Ver Carrito</span>
				</div>
				<ul class="menu-secundario">
					<li><a href="#">Ingresa</a></li>
					<li class="register"><a href="#">Registrate</a></li>
				</ul>
			</div>
			<div class="header">
				<div class="logo-wrapper">
					<img src="<?php echo $url . 'img/logo.jpg' ?>" alt="Happy Day">
				</div>
				<div class="buscador-wrapper">
					<h2>Donde le damos un toque <b>¡Cool!</b> a su evento</h2>
					<form action="<?php echo $url . 'buscar.php' ?>" method="post" class="buscador">
						<select name="categorias" id="categorias">
							<option>Infantil</option>
							<option>Boda</option>
							<option>XV anos</option>
							<option>Social</option>
							<option>Formal</option>
							<option>Baby Shower</option>
						</select>
						<input type="text" name="buscar" id="buscar" placeholder="¿Qué desea buscar?">
						<button type="submit"><span class="icon-magnifying-glass"></span></button>
					</form>
				</div>
			</div>
			<nav class="nav">
				<ul>
					<li><a href="<?php echo $url ?>"><i class="icon-home"></i>&nbsp;Inicio</a></li>
					<li>
						<a href="<?php echo $url . 'catalogo.php' ?>">
							<i class="icon-shop"></i>&nbsp;Catalogo&nbsp;<i class="icon-chevron-small-down"></i>
						</a>
						<div>
							<ul>
								<li class="titulo amarillo">
									<a href="<?php echo $url . 'catalogo/infantil.php' ?>">Infantil</a>
								</li>
								<li><a href="<?php echo $url . 'catalogo/infantil/arreglos.php' ?>">Arreglos</a></li>
								<li><a href="<?php echo $url . 'catalogo/infantil/inflables.php' ?>">Inflables</a></li>
								<li><a href="<?php echo $url . 'catalogo/infantil/invitaciones.php' ?>">Invitaciones</a></li>
								<li><a href="<?php echo $url . 'catalogo/infantil/manteleria.php' ?>">Manteleria</a></li>
							</ul>
							<ul>
								<li class="titulo">
									<a href="<?php echo $url . 'catalogo/boda.php' ?>">Boda</a>
								</li>
								<li><a href="<?php echo $url . 'catalogo/boda/arreglos.php' ?>">Arreglos</a></li>
								<li><a href="<?php echo $url . 'catalogo/boda/globos.php' ?>">Globos</a></li>
								<li><a href="<?php echo $url . 'catalogo/boda/invitaciones.php' ?>">Invitaciones</a></li>
								<li><a href="<?php echo $url . 'catalogo/boda/manteleria.php' ?>">Manteleria</a></li>
							</ul>
							<ul>
								<li class="titulo rosa">
									<a href="<?php echo $url . 'catalogo/xvanos.php' ?>">XV años</a>
								</li>
								<li><a href="<?php echo $url . 'catalogo/xvanos/arreglos.php' ?>">Arreglos</a></li>
								<li><a href="<?php echo $url . 'catalogo/xvanos/globos.php' ?>">Globos</a></li>
								<li><a href="<?php echo $url . 'catalogo/xvanos/invitaciones.php' ?>">Invitaciones</a></li>
								<li><a href="<?php echo $url . 'catalogo/xvanos/manteleria.php' ?>">Manteleria</a></li>
							</ul>
							<ul>
								<li class="titulo verde">
									<a href="<?php echo $url . 'catalogo/social.php' ?>">Social</a>
								</li>
								<li><a href="<?php echo $url . 'catalogo/social/arreglos.php' ?>">Arreglos</a></li>
								<li><a href="<?php echo $url . 'catalogo/social/globos.php' ?>">Globos</a></li>
								<li><a href="<?php echo $url . 'catalogo/social/invitaciones.php' ?>">Invitaciones</a></li>
								<li><a href="<?php echo $url . 'catalogo/social/manteleria.php' ?>">Manteleria</a></li>
							</ul>
							<ul>
								<li class="titulo naranja">
									<a href="<?php echo $url . 'catalogo/formal.php' ?>">Formal</a>
								</li>
								<li><a href="<?php echo $url . 'catalogo/formal/arreglos.php' ?>">Arreglos</a></li>
								<li><a href="<?php echo $url . 'catalogo/formal/globos.php' ?>">Globos</a></li>
								<li><a href="<?php echo $url . 'catalogo/formal/invitaciones.php' ?>">Invitaciones</a></li>
								<li><a href="<?php echo $url . 'catalogo/formal/manteleria.php' ?>">Manteleria</a></li>
							</ul>
							<ul>
								<li class="titulo azul">
									<a href="<?php echo $url . 'catalogo/babyshower.php' ?>">Baby Shower</a>
								</li>
								<li><a href="<?php echo $url . 'catalogo/babyshower/arreglos.php' ?>">Arreglos</a></li>
								<li><a href="<?php echo $url . 'catalogo/babyshower/globos.php' ?>">Globos</a></li>
								<li><a href="<?php echo $url . 'catalogo/babyshower/invitaciones.php' ?>">Invitaciones</a></li>
								<li><a href="<?php echo $url . 'catalogo/babyshower/manteleria.php' ?>">Manteleria</a></li>
							</ul>
						</div>
					</li>
					<li><a href="<?php echo $url . 'mision.php' ?>"><i class="icon-book"></i>&nbsp;Misión</a></li>
					<li><a href="<?php echo $url . 'vision.php' ?>"><i class="icon-users"></i>&nbsp;Visión</a></li>
				</ul>
			</nav>
		</header>