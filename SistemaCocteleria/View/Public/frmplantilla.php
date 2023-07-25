<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="Style/plantilla.css">
	<link rel="stylesheet" href="Style/footer.css">
	<link rel="stylesheet" href="Style/animacion.css">
</head>

<body>
	<header>
		<div class="logo">
			<img src="Img/logo.jpg" alt="logo" class="logo-img">
			<h2 class="logo-nombre">disFRUTA</h2>
		</div>
		<nav id="menu-area">
			<a href="http://LocalHost/SistemaCocteleria/?Controller=CatalogoController&Method=MostrarCatalogoSesion">Inicio</a>
			<a href="#" onclick="confirmarCierreSesion()">Cerrar sesión</a>
		</nav>
	</header>

	<!-- Este es el cuerpo -->
	<?php include_once($vista); ?>


	<!-- Este es el pie de la pagina -->
	<br></br>
	<br></br>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a>
                        <img src="Img/logo.jpg" alt="Logo de empresa">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>La empresa Disfruta es un negocio especializado en cocteles a partir de cortes de fruta</p>
                <p>Buscamos aumentar el consumo de frutas en la region, procurando la calidad en nuestros productos</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a class="fa fa-facebook"></a>
                    <a class="fa fa-instagram"></a>
                    <a class="fa fa-twitter"></a>
                    <a class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>DisFruta</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>

</body>

</html>
<script>
	function confirmarCierreSesion() {
		if (confirm("¿Estás seguro de que deseas cerrar sesión?")) {
			window.location.href = "http://LocalHost/SistemaCocteleria/?Controller=CatalogoController&Method=MostrarCatalogo";
		}
	}
</script>