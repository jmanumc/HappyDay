
<?php include 'database/conexion.php'; ?>

<?php include 'partials/header.php'; ?>

<?php include 'partials/content.php'; ?>

<?php 

	// Almacena todas productos de la base de datos
	$productos = mysqli_query($conexion, "select * from productos");

	$buscar = $_POST['buscar'];
	$categoria = $_POST['categorias'];

	if( isset($buscar) ) {

		$productos = mysqli_query($conexion,
			"select * from productos where nombre like '%" . $buscar . "%'  or etiqueta like '%" . $buscar . "%' "
		);

	}

	if($buscar == "") {

		$buscar = $categoria;

		$productos = mysqli_query($conexion, 
			" select * from productos where nombre like '%" . $categoria . "%'  or etiqueta like '%" . $categoria . "%' "
		);

	}

?>

<header>
	<h2>Resultados de "<?php echo $buscar; ?>"</h2>
</header>

<?php
	while ($producto = mysqli_fetch_assoc($productos)) {	
		
		include $ruta_productos;

	}
?>

<?php include 'partials/footer.php'; ?>
