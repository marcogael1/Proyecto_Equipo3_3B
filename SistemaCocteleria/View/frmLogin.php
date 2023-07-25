<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="Style/login2.css">
  <link rel="stylesheet" href="Style/animacion.css">
  <script src="/Scripts/denegado.js"></script>
</head>
<body>
<br></br>
<div class="center">
<form class="form" action="http://LocalHost/SistemaCocteleria/?Controller=UserController&Method=Acceder" method="POST">
    <h1>LOGIN</h1>
    <div class="form-group">
      <input type="text" id="usuario" name="txtusuario" required>
      <span></span>
      <label for="usuario">Usuario:</label>
    </div>
    <div class="form-group">
      <input type="password" id="password" name="txtpassword" required>
      <span></span>
      <label for="password">Password:</label>
    </div>
      <button type="submit">Acceder</button>
    <p class="registro">¿Desea crear un usuario?<a href="http://localhost/SistemaCocteleria/?Controller=UserController&Method=CrearUsuario">Cree su registro aqui</a></p>
  </form>
</div>
<script>
  window.addEventListener('DOMContentLoaded', function() {
    document.body.style.opacity = '1';
  });
</script>
</body>
</html>
