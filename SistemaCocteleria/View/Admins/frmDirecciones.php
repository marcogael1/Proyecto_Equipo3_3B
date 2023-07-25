<head>
    <link rel="stylesheet" href="Style/login.css">
</head>

    <form class="form" action="http://LocalHost/SistemaCocteleria/?Controller=DireccionesController&Method=insertarDirecciones" method="POST">
    <h2>Agregar Direccion</h2>
    <div class="form-group">
        <label for="estado">Estado:</label>
        <select name="selectEstado" class="form-control">
                <option value="Hidalgo">Hidalgo</option>
                <option value="Veracruz">Veracruz</option>
        </select>
    </div>
    <div class="form-group">
        <label for="municipio">Municipio:</label>
        <select name="selectMunicipio" class="form-control"> 
                <option value="Huejutla">Huejutla</option>
                <option value="Chalma">Chalma</option>
        </select>
    </div>
    <div class="form-group">
      <label for="colonia">Colonia:</label>
      <input type="text" id="colonia" name="txtcolonia" required required minlength="3" maxlength="50">
    </div>
    <div class="form-group">
      <button type="submit">Agregar</button>
    </div>
  </form>
  <body>
    <h1>Tabla de direcciones</h1>
    <table>
    <tr>
        <th>Estado</th>
        <th>Municipio</th>
        <th>Colonia</th>
    </tr>
    <?php foreach ($direcciones as $direccion) : ?>
        <tr>
            <td><?= $direccion['Estado'] ?></td>
            <td><?= $direccion['Municipio'] ?></td>
            <td><?= $direccion['Direccion'] ?></td>
        </tr> 
    <?php endforeach?>
</table>
</body>
</html>