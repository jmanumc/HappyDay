
<?php include '../database/conexion.php'; ?>

<?php include '../partials/header.php'; ?>

<?php include '../partials/content.php'; ?>

<?php 

	// Almacena todas productos de la base de datos
	$productos = mysql_query('select * from productos');

?>

<header>
	<h2>Productos</h2>
</header>
<article>
	<table class="tabla-admin">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Descripción</th>
				<th>Etiqueta</th>
			</tr>
		</thead>
		<tbody>
			
			<?php while ($producto = mysql_fetch_array($productos)) { ?>

				<tr>
					<td><?php echo $producto['id']; ?></td>
					<td><?php echo $producto['nombre']; ?></td>
					<td><?php echo $producto['precio']; ?></td>
					<td><?php echo $producto['descripcion']; ?></td>
					<td><?php echo $producto['etiqueta']; ?></td>
				</tr>

			<?php } ?>

		</tbody>
	</table>
</article>

<?php include '../partials/footer.php'; ?>
