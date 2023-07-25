<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Style/login.css">
</head>
<body>
    <div class="box">
        <img src="Img/logo.jpg" alt="Logo" style="display: block; margin: 20px auto; max-width: 200px;
            height: 200px; border: 1px solid black; border-radius: 10px;">
        
        <h1>Vista de Respaldo</h1>
        <hr>
        <p>Esta vista esta diseñada para que los administradores puedan realizar respaldos a la base de datos por cuestiones de corrupcion</p>

        <form action="generar_respaldo.php" method="post">
            <label for="ubicacion_guardado">Elegir ubicación de guardado:</label>
            <input type="file" name="ubicacion_guardado" id="ubicacion_guardado" directory multiple webkitdirectory mozdirectory>
            <br>
            <button type="submit" name="backup">Generar Respaldo</button>
        </form>
    </div>
</body>
</html>