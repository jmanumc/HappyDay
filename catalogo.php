
<?php include 'database/conexion.php'; ?>

<?php include 'partials/header.php'; ?>

<?php include 'partials/content.php'; ?>

<?php 

	// Almacena todas productos de la base de datos
	$productos = mysqli_query($conexion, "select * from productos");

?>

<header>
	<h2>Catalogo de productos</h2>
</header>

<?php
	while ($producto = mysqli_fetch_assoc($productos)) {	
		
		include $ruta_productos;

	}
?>

<?php include 'partials/footer.php'; ?>
