<?php 

	if ( isset($_POST['producto-id']) ) {

		$id = $_POST['producto-id'];
		$nombre = $_POST['producto-nombre'];
		$precio = $_POST['producto-precio'];
		$cantidad = $_POST['producto-cantidad'];
		$mi_carrito[] = array('id' => $id, 'nombre' => $nombre, 'precio' => $precio, 'cantidad' => $cantidad);

	}

	session_start();

	if ( isset($_SESSION['carrito']) ) {

		$mi_carrito = $_SESSION['carrito'];

		if ( isset($_POST['producto-id']) ) {
			$id = $_POST['producto-id'];
			$nombre = $_POST['producto-nombre'];
			$precio = $_POST['producto-precio'];
			$cantidad = $_POST['producto-cantidad'];
			$posicion = -1;

			for ($i = 0; $i < count($mi_carrito); $i++) { 
				if ($id == $mi_carrito[$i]['id']) {
					$posicion = $i;
				}
			}

			if ($posicion <> -1) {
				$cuanto = $mi_carrito[$posicion]['cantidad'] + $cantidad;
				$mi_carrito[$posicion] = array('id' => $id, 'nombre' => $nombre, 'precio' => $precio, 'cantidad' => $cuanto);
			} else {
				$mi_carrito[] = array('id' => $id, 'nombre' => $nombre, 'precio' => $precio, 'cantidad' => $cantidad);
			}
		}

	}

	if ( isset($_POST['id2']) ) {

		$indice = $_POST['id2'];
		$cuanto = $_POST['cantidad2'];
		$mi_carrito[$indice]['cantidad'] = $cuanto;

	}

	if ( isset($_POST['id3']) ) {

		$indice = $_POST['id3'];
		$mi_carrito[$indice] = null;

	}

	if ( isset($mi_carrito) ) { $_SESSION['carrito'] = $mi_carrito;	}

?>

<?php include 'database/conexion.php'; ?>

<?php include 'partials/header.php'; ?>

<?php include 'partials/content.php'; ?>

<header>
	<h2>Listado de compras</h2>
</header>
<article>
	<table class="tabla">
		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Subtotal</th>
				<th></th>
			</tr>
		</thead>
		<tbody>

			<?php 
				if( isset($mi_carrito) ) {

					$total = 0;

					for ($i = 0; $i < count($mi_carrito); $i++) {

						if ($mi_carrito[$i] <> null) {
			?>
							<tr>
								<td><?php echo $mi_carrito[$i]['nombre'] ?></td>
								<td><?php echo '$' . $mi_carrito[$i]['precio'] ?></td>
								<td>
									<form action="" method="post" name="actualizar">
										<input type="hidden" name="id2" value="<?php echo $i ?>">
										<input type="text" name="cantidad2" value="<?php echo $mi_carrito[$i]['cantidad'] ?>" size="4" maxlength="4">
										<button type="submit">
											<span class="icon-cw"></span>
										</button>
									</form>
								</td>
								<?php
									$subtotal = $mi_carrito[$i]['precio'] * $mi_carrito[$i]['cantidad'];
									$total += $subtotal;
								?>
								<td>$<?php echo $subtotal ?></td>
								<td>
									<form action="" method="post" name="eliminar">
										<input type="hidden" name="id3" value="<?php echo $i ?>">
										<button type="submit">
											<span class="icon-cross"></span>
										</button>
									</form>
								</td>
							</tr>
			<?php 	
						}
					}
				} 
			?>

			<tr>
			<tr>
				<td></td>
				<td></td>
				<th>Total</th>
				<td><?php if ( isset($total) ) echo '$' . $total ?></td>
				<td>
					<form action="<?php echo $url . 'confirmarpedido.php' ?>" method="post">
						<button type="submit">
							<span class="icon-check"></span>&nbsp;Confirmar
						</button>
					</form>
				</td>
			</tr>
		</tbody>
	</table>
</article>

<?php include 'partials/footer.php'; ?>
