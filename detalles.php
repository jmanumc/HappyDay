
<?php include 'database/conexion.php'; ?>

<?php include 'partials/header.php'; ?>

<?php include 'partials/content.php'; ?>

<?php 

	$id = $_GET['id'];

	// Almacena todas productos de la base de datos
	$productos = mysqli_query($conexion, "select * from productos where id = " . $id . "");

	$producto = mysqli_fetch_assoc($productos);

?>

<div class="detalles">
	<div class="producto-img inline-block">
		<img src="<?php echo $url . $producto['imagen'] ?>" alt="<?php echo $producto['nombre'] ?>">
	</div>
	<div class="producto-info inline-block">
		<div class="producto-title">
			<h1><?php echo $producto['nombre'] ?></h1>
			<span><?php echo $producto['etiqueta'] ?></p>
		</div>
		<div class="producto-descripcion">
			<p><b>Descripción:</b><br><?php echo $producto['descripcion'] ?></p>
			<p><b>Precio:</b>&nbsp;<?php echo '$' . $producto['precio'] ?></p>
			<form action="<?php echo $url . 'carrito.php' ?>" method="post" name="carrito">
				<input type="hidden" name="producto-id" value="<?php echo $producto['id'] ?>">
				<input type="hidden" name="producto-nombre" value="<?php echo $producto['nombre'] ?>">
				<input type="hidden" name="producto-precio" value="<?php echo $producto['precio'] ?>">
				<input type="hidden" name="producto-cantidad" value="1">
				<button type="submit" name="carrito-submit">
					<i class="icon-shopping-cart"></i>&nbsp;Añadir al carrito
				</button>
			</form>
		</div>
	</div>
</div>


<?php include 'partials/footer.php'; ?>
