<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/detalle.css">
</head>

<body>
    <section>
        <?php foreach ($Detalleproductos as $detalle) { ?>
            <div class="producto-item">
                <!-- Muestra los detalles del producto -->
                <div class='contenedor-foto'>
                    <?php
                    $imagenCodificada = base64_encode($detalle['Imagen']);
                    echo '<img src="data:image/jpeg;base64,' . $imagenCodificada . '" alt="">';
                    ?>
                    <h2>
                        <?= $detalle['Nombre'] ?> <span class="precio">$
                        <?= $detalle['Precio'] ?>
                    </span>
                    </h2>
                    <p>
                        Descripcion: <?= $detalle['Descripcion'] ?>
                    </p>
                    <p>
                        Categoria: <?= $detalle['Tipo'] ?>
                    </p>
                    <p>
                        Cantidad disponible: <?= $detalle['Stock'] ?>
                    </p>
                    <div class="fila">
                        <div class="size">
                            <label for="">Tamaño</label>
                            <select name="" id="">
                                <option value="">Chico(250gr)</option>
                                <option value="">Mediano(450gr)</option>
                                <option value="">Grande(850gr)</option>
                            </select>
                        </div>
                    
                        <div>
                            <button href="#" onclick="confirmarSesion()">COMPRAR</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </section>
</body>
</html>
<script>
	function confirmarSesion() {
		if (confirm("El producto ha sido comprado, ¡Esperemos que le guste su coctel!")) {
			window.location.href = "http://LocalHost/SistemaCocteleria/?Controller=CatalogoController&Method=MostrarCatalogoSesion";
		}
	}
</script>