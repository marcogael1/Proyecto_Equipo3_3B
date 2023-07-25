<?php
include_once 'config/DBConnection.php';

class clsReportes extends clsconexion{

    public function consultaProductos() {
		$sql = "CALL SP_ConsultaProductos();";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	}
	public function consultaProductosPorTipo($tipo){
		
		$sql = "CALL SP_ConsultaTipo('$tipo');";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	}
}
	

?>
