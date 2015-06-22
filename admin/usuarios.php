
<?php include '../database/conexion.php'; ?>

<?php include '../partials/header.php'; ?>

<?php include '../partials/content.php'; ?>

<?php 

	// Almacena todas productos de la base de datos
	$usuarios = mysql_query('select * from usuarios');

?>

<header>
	<h2>Usuarios</h2>
</header>
<article>
	<table class="tabla-admin">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Correo</th>
				<th>Contraseña</th>
				<th>Tipo</th>
			</tr>
		</thead>
		<tbody>
			
			<?php while ($usuario = mysql_fetch_array($usuarios)) { ?>

				<tr>
					<td><?php echo $usuario['id']; ?></td>
					<td><?php echo $usuario['nombre']; ?></td>
					<td><?php echo $usuario['apellido']; ?></td>
					<td><?php echo $usuario['correo']; ?></td>
					<td><?php echo $usuario['contrasena']; ?></td>
					<td><?php echo $usuario['tipo']; ?></td>
				</tr>

			<?php } ?>

		</tbody>
	</table>
</article>

<?php include '../partials/footer.php'; ?>
