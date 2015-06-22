<?php 

	session_start();

	$mi_carrito = $_SESSION['carrito'];

?>

<?php include 'database/conexion.php'; ?>

<?php include 'partials/header.php'; ?>

<?php include 'partials/content.php'; ?>

<header>
	<h2>Confirmar Pedido</h2>
</header>
<article>
	<table class="tabla">
		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Subtotal</th>
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
								<td><?php echo $mi_carrito[$i]['cantidad']; ?></td>
								<?php
									$subtotal = $mi_carrito[$i]['precio'] * $mi_carrito[$i]['cantidad'];
									$total += $subtotal;
								?>
								<td>$<?php echo $subtotal ?></td>
							</tr>
			<?php 	
						}
					}
				} 
			?>

			<tr>
			<tr>
				<td>
					<form action="#" method="post" name="confirmarPedido">
						<button type="submit">
							<b>COMPRAR</b>&nbsp;<span class="icon-shopping-cart"></span>
						</button>
					</form>
				</td>
				<td></td>
				<th>Total</th>
				<td><?php if ( isset($total) ) echo '$' . $total ?></td>
			</tr>
		</tbody>
	</table>
</article>

<?php include 'partials/footer.php'; ?>