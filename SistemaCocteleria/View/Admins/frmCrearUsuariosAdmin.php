<head>
    <link rel="stylesheet" href="Style/login.css">
</head>
<form class="form" action="http://localhost/SistemaCocteleria/?Controller=UserController&Method=CrearUsuarioAdmin" method="POST">
    <h2>Crear Usuario</h2>
    <div class="form-group">
      <div class="img">
          <img src="Img/crearusuario.jpg" alt="img" width="200" height="100">
      </div>  
      <label for="Nombre">Nombre:</label>
      <input type="text" id="usuario" name="txtnombre" required pattern="[a-zA-Z ]*"
    title="Solo se aceptan letras" minlength="3" maxlength="30">
    </div>
    <div class="form-group">
      <label for="Apellido paterno">Apellido paterno:</label>
      <input type="text" id="paterno" name="txtpaterno" required pattern="[a-zA-Z ]*"
    title="Solo se aceptan letras" minlength="3" maxlength="30">
    </div>
    <div class="form-group">
      <label for="Apellido Materno">Apellido Materno:</label>
      <input type="text" id="materno" name="txtmaterno" required pattern="[a-zA-Z ]*"
    title="Solo se aceptan letras" minlength="3" maxlength="30">
    </div>
    <div class="form-group">
      <label for="Usuario">Usuario:</label>
      <input type="text" id="usuario" name="txtusuario" required minlength="3" maxlength="10">
    </div>
    <div class="form-group">
      <label for="Password">Password:</label>
      <input type="password" id="password" name="txtpassword" required required minlength="3" maxlength="10">
    </div>
    <div class="form-group">
      <label for="Date">Fecha de nacimiento:</label>
      <input type="date" id="date" name="txtfecha" required>
    </div>
    <div class="form-group">
        <label for="sexo">Sexo:</label>
        <select name="selectTipo" class="form-control">
            
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="No binario">No binario</option>
            
        </select>
    </div>
    <div class="form-group">
        <label for="tipo">Tipo:</label>
        <select name="selectTipo2" class="form-control">
            
                <option value="Administrador">Administrador</option>
                <option value="Cliente">Cliente</option>
            
        </select>
    </div>
    
    <div class="form-group">
      <button type="submit">Crear</button>
    </div>
  </form>
  <h1>Información de Usuarios</h1>
    <table>
        <tr>
            <th>ID usuario</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Fecha de nacimiento</th>
            <th>Sexo</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Tipo de usuario</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($usuarios as $user) :?>
          <form class="form" action="http://LocalHost/SistemaCocteleria/?Controller=UserController&Method=EditarUsuario" method="POST">  
          <tr>
                <td><input type="hidden" name="id" value="<?= $user['IDUsuario'] ?>"></td>
                <td><input type="text" name="txtnombre1" value="<?= $user['Nombre'] ?>"></td>
                <td><input type="text" name="txtpaterno" value="<?= $user['Ap'] ?>"></td>
                <td><input type="text" name="txtmaterno" value="<?= $user['Am'] ?>"></td>
                <td><input type="date" name="txtfecha" value="<?= $user['FechaNacimiento'] ?>"></td>
                <td><input type="text" name="txtsexo" value="<?= $user['Sexo'] ?>"></td>
                <td><input type="text" name="txtusuario" value="<?= $user['Usuario'] ?>"></td>
                <td><input type="text" name="txtpassword" value="<?= $user['vchPassword'] ?>"></td>
                <td><input type="text" name="txttipo" value="<?= $user['Tipo'] ?>"></td>
                <td>
                <button type="submit">Actualizar</button>
                    <a href="http://LocalHost/SistemaCocteleria/?Controller=UserController&Method=eliminarUsuario&id=<?= $user['IDUsuario'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>