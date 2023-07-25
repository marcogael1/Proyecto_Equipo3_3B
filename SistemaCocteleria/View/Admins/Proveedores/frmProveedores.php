<head>
    <link rel="stylesheet" href="Style/login.css">
</head>
<form class="form" action="http://LocalHost/SistemaCocteleria/?Controller=ProveedoresController&Method=insertarProveedor" method="POST">
    <h2>Proveedores</h2>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="txtnombre" required pattern="[a-zA-Z ]*"
    title="Solo se aceptan letras" minlength="3" maxlength="30">
    </div>
    <div class="form-group">
      <label for="colonia">Colonia:</label>
      <input type="text" id="colonia" name="txtcolonia" required>
    </div>
    <div class="form-group">
      <label for="email">Correo:</label>
      <input type="email" id="email" name="txtemail" required>
    </div>
    <div class="form-group">
      <label for="telefono">Telefono:</label>
      <input type="tel" id="telefono" name="txttelefono" required>
    </div>
    <div class="form-group">
      <button type="submit">Guardar</button>
    </div>
  </form>

<body>
<head>
    <link rel="stylesheet" href="Style/login.css">
</head>
    <h1>Información de Proveedores</h1>
    <table>
    <tr>
        <th>ID Proveedor</th>
        <th>Nombre</th>
        <th>Colonia</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($proveedores as $proveedor) : ?>
      <form class="form" action="http://LocalHost/SistemaCocteleria/?Controller=ProveedoresController&Method=EditarProveedor" method="POST">
      <tr>
            <td><input type="hidden" name="id" pattern="" value="<?= $proveedor['IdProveedor'] ?>"></td>
            <td><input type="text" name="txtnombre" value="<?= $proveedor['Nombre'] ?>"></td>
            <td><input type="text" name="txtcolonia" value="<?= $proveedor['Colonia'] ?>"></td>
            <td><input type="email" name="txtemail" value="<?= $proveedor['Correo'] ?>"></td>
            <td><input type="text" name="txttelefono" value="<?= $proveedor['Telefono'] ?>"></td>
            <td>
                <button type="submit">Actualizar</button>
                <a href="http://LocalHost/SistemaCocteleria/?Controller=ProveedoresController&Method=eliminarProveedor&id=<?= $proveedor['IdProveedor'] ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
