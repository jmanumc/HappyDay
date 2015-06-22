<?php /*

	Este documeto mustra en la página un producto,
	con su información correspondiente.

	+ Imagen del producto
	+ Nombre del producto
	+ Etiquetas del producto.
	+ Descripción del producto.

	Tambien muestra un boton, que permite agregar el producto al carrito.

*/ ?>
<article>
	<div class="producto-img inline-block">
		<a href="<?php echo $url . 'detalles.php?id=' . $producto['id'] ?>">
			<img src="<?php echo $url . $producto['imagen'] ?>" alt="<?php echo $producto['nombre'] ?>">
		</a>
	</div>
	<div class="producto-info inline-block">
		<div class="producto-title">
			<a href="<?php echo $url . 'detalles.php?id=' . $producto['id'] ?>">
				<h1><?php echo $producto['nombre'] ?></h1>
			</a>
			<span><?php echo $producto['etiqueta'] ?></span>
		</div>
		<div class="producto-descripcion">
			<p><?php echo $producto['descripcion'] ?></p>
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
</article>