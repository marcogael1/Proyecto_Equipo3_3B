<head>
    <link rel="stylesheet" href="Style/login.css">
</head>
<form class="form" action="http://LocalHost/SistemaCocteleria/?Controller=ProductosController&Method=insertarProveedor" method="POST">
    <h2>Fabricante</h2>
    <div class="form-group">
      <label for="nombre">Fruta:</label>
      <input type="text" id="nombre" name="txtnombre" required>
    </div>
    <div class="form-group">
      <label for="colonia">Stock:</label>
      <input type="text" id="colonia" name="txtcolonia" required>
    </div>
    <div class="form-group">
        <label for="Proveedor">Proveedor:</label>
        <select name="selectTipo" class="form-control">
        </select>
    </div>
    <div class="form-group">
      <button type="submit">Guardar</button>
    </div>
  </form>
