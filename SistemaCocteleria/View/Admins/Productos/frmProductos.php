<head>
    <link rel="stylesheet" href="Style/login.css">
</head>
<body>
    <form class="form" action="http://LocalHost/SistemaCocteleria/?Controller=ProductosController&Method=insertarProducto" method="POST" enctype="multipart/form-data">
        <h2>Productos</h2>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="txtnombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion:</label>
            <input type="text" id="nombre" name="txtdescripcion" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="txtprecio" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="text" id="precio" name="txtstock" required>
        </div>
        <div class="form-group">
        <label for="tipo">Tipo:</label>
        <select name="selectTipo" class="form-control">

                <option value="Dulce">Dulce</option>
                <option value="Acido">Acido</option>
                <option value="Tropical">Tropical</option>
                <option value="Tematicos">Tematicos</option>            
        </select>
        </div>
    </div>
        <div class="form-group">
            <label for="file">Imagen:</label>
            <input type="file" id="file" name="txtimagen" required>
        </div>
        <div class="form-group">
            <button type="submit">Guardar</button>
        </div>
    </form>
    <h1>Información de Productos</h1>
    <table>
        <tr>
            <th>ID Producto</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($productos as $producto) :?>
            <form class="form" action="http://LocalHost/SistemaCocteleria/?Controller=ProductosController&Method=EditarProducto" method="POST">
            <tr>
                <td><input type="hidden" name="id1" value="<?= $producto['IdProducto'] ?>"></td>
                <td><input type="text" name="txtnombre1" value="<?= $producto['Nombre'] ?>"></td>
                <td><input type="text" name="txttipo1" value="<?= $producto['Tipo'] ?>"></td>
                <td><input type="text" name="txtdescripcion1" value="<?= $producto['Descripcion'] ?>"></td>
                <td><input type="text" name="txtprecio1" value="<?= $producto['Precio'] ?>"></td>
                <td><input type="text" name="txtstock1" value="<?= $producto['Stock'] ?>"></td>
                <td>
                    <?php
                    $imagenCodificada = base64_encode($producto['Imagen']);
                    echo '<img src="data:image/jpeg;base64,' . $imagenCodificada . '" alt="">';
                    ?>
                </td>
                <td>
                    <button type="submit">Actualizar</button>
                    <a href="http://LocalHost/SistemaCocteleria/?Controller=ProductosController&Method=eliminarProducto&id=<?= $producto['IdProducto'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
