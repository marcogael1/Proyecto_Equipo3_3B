<?php
include_once 'config/DBConnection.php';

class clsCatalogo extends clsconexion{

	public function consultaProductos() {
		$sql = "CALL SP_ConsultaProductos();";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	}

	public function consultaDetalle($productoId) {
		$sql = "CALL SP_ConsultaDetalle($productoId);";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	}

	public function consultaProductosPorCategoria($categoriaId) {
		$sql = "CALL SP_ConsultaCategoria('$categoriaId');";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	}
}

?>