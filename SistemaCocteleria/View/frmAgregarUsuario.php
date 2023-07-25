<head>
    <link rel="stylesheet" href="Style/login.css">
</head>
<form class="form" action="http://localhost/SistemaCocteleria/?Controller=UserController&Method=CrearUsuario" method="POST">
    <h2>Crear Usuario</h2>
    <div class="form-group">
      <div class="img">
          <img src="Img/crearusuario.jpg" alt="img" width="200" height="100">
      </div>  
      <label for="Nombre">Nombre:</label>
      <input type="text" id="usuario" name="txtnombre" required pattern="[a-zA-Z ]*" title="Solo se aceptan letras">
    </div>
    <div class="form-group">
      <label for="Apellido paterno">Apellido paterno:</label>
      <input type="text" id="paterno" name="txtpaterno" required pattern="[a-zA-Z ]*" title="Solo se aceptan letras">
    </div>
    <div class="form-group">
      <label for="Apellido Materno">Apellido Materno:</label>
      <input type="text" id="materno" name="txtmaterno" required pattern="[a-zA-Z ]*" title="Solo se aceptan letras">
    </div>
    <div class="form-group">
      <label for="Usuario">Usuario:</label>
      <input type="text" id="usuario" name="txtusuario" required>
    </div>
    <div class="form-group">
      <label for="Password">Password:</label>
      <input type="password" id="password" name="txtpassword" required>
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
      <button type="submit">Crear</button>
    </div>
  </form>