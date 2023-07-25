<head>
    <link rel="stylesheet" href="Style/login.css">
</head>
<body>
    <form class="form" action="http://localhost/SistemaCocteleria/?Controller=ReportesController&Method=reporteProductos" method="POST">
    <h2>Todos los Productos</h2>
    <div class="form-group">
      <button type="submit">Generar</button>
    </div>
  </form>
  <form class="form" action="http://localhost/SistemaCocteleria/?Controller=ReportesController&Method=reporteProductosTipo" method="POST">
    <h2>Reporte por tipo</h2>
    <div class="form-group">
    <label for="tipo">Seleccione el tipo:</label>
					<select id="tipo" name="selectTipo">
						<option value="Dulce">Dulce</option>
						<option value="Acido">Acido</option>
						<option value="Tematicos">Tematicos</option>
					</select>
    </div>
       
    <div class="form-group">
      <button type="submit">Generar</button>
    </div>
  </form>
</body>
</html>