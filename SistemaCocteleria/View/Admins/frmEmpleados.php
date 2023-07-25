<head>
    <link rel="stylesheet" href="Style/login.css">
</head>
<form class="form" action="http://localhost/SistemaCocteleria/?Controller=EmpleadosController&Method=insertarEmpleado" method="POST">
    <h2>Empleados</h2>
      <label for="Nombre">Nombre:</label>
      <input type="text" id="usuario" name="txtnombre" required equired pattern="[a-zA-Z ]*"
    title="Solo se aceptan letras" minlength="3" maxlength="30">
    </div>
    <div class="form-group">
      <label for="Apellido paterno">Apellido paterno:</label>
      <input type="text" id="paterno" name="txtpaterno" required equired pattern="[a-zA-Z ]*"
    title="Solo se aceptan letras" minlength="3" maxlength="30">
    </div>
    <div class="form-group">
      <label for="Apellido Materno">Apellido Materno:</label>
      <input type="text" id="materno" name="txtmaterno" required equired pattern="[a-zA-Z ]*"
    title="Solo se aceptan letras" minlength="3" maxlength="30">
    </div>
    <div class="form-group">
      <label for="email">Correo:</label>
      <input type="email" id="email" name="txtcorreo" required>
    </div>
    <div class="form-group">
      <label for="tel">Telefono:</label>
      <input type="tel" id="tel" name="txttel" required >
    </div>
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
        <label for="municipio">Colonia:</label>
        <select name="selectColonia" class="form-control"> 
                <option value="Ignacio Zaragoza">Ignacio Zaragoza</option>
                <option value="La Gerrero">La Gerrero</option>
                <option value="CorralBlanco">CorralBlanco</option>
        </select>
    </div>
    <div class="form-group">
            <button type="submit">Guardar</button>
        </div>
</form>

<body>
    <h1>Informacion de Empleados</h1>
    <table>
    <tr>
        <th>ID Empleado</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Estado</th>
        <th>Municipio</th>
        <th>Colonia</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($empleados as $empleado) : ?>
      <form class="form" action="http://LocalHost/SistemaCocteleria/?Controller=EmpleadosController&Method=EditarProducto" method="POST">
        <tr>
            <td><input type="hidden" name="id1" value="<?= $empleado['IdEmpleado'] ?>"></td>
            <td><input type="text" name="txtnombre1" value="<?= $empleado['Nombre'] ?>"></td>
            <td><input type="text" name="txtap1" value="<?= $empleado['Apaterno'] ?>"></td>
            <td><input type="text" name="txtam1" value="<?= $empleado['Amaterno'] ?>"></td>
            <td><input type="text" name="txtcorreo1" value="<?= $empleado['Email'] ?>"></td>
            <td><input type="text" name="txttel1" value="<?= $empleado['Telefono'] ?>"></td>
            <td><input type="text" name="txtestado1" value="<?= $empleado['Estado'] ?>"></td>
            <td><input type="text" name="txtmunicipio1" value="<?= $empleado['Municipio'] ?>"></td>
            <td><input type="text" name="txtcolonia1" value="<?= $empleado['Direccion'] ?>"></td>
            <td>
                <button type="submit">Actualizar</button>
                <a href="http://LocalHost/SistemaCocteleria/?Controller=EmpleadosController&Method=EliminarEmpleado&id=<?= $empleado['IdEmpleado'] ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach?>
</table>