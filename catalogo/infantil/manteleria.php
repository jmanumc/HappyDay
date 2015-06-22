
<?php include '../../database/conexion.php'; ?>

<?php include '../../partials/header.php'; ?>

<?php include '../../partials/content.php'; ?>

<?php 

	// Almacena todos los arreglos infantiles
	$productos = mysqli_query($conexion, "select * from productos where etiqueta like '%Infantil%Manteleria%' ");

?>

<header>
	<h2>Manteleria infantil</h2>
</header>

<?php
	while ($producto = mysqli_fetch_assoc($productos)) {	
		
		include '../../' . $ruta_productos;

	}
?>

<?php include '../../partials/footer.php'; ?>
