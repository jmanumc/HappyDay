<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "happy_day";
	$url = "http://localhost/happyday/";
	$ruta_productos = "/partials/productos.php";

	// Esta es la conexion con la base de datos
	$conexion = mysqli_connect($server, $user, $password, $database) or die('No hay conexión a la base de datos.');

?>