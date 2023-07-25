<?php
include_once 'config/DBConnection.php';

class clsProductos extends clsconexion{

	public function consultaProductos() {
		
		$sql = "CALL SP_ConsultaProductos();";
		$resultado = $this->conectar->query($sql);
		return $resultado;
		   
	}
	public function insertarProductos($nombre, $imagen, $tipo, $descripcion, $precio, $stock) {
		$imagenBinaria = file_get_contents($imagen['tmp_name']);
		$imagenBinariaEscapada = $this->conectar->real_escape_string($imagenBinaria);
	
		$sql = "CALL SP_InsertarProducto('$nombre','$tipo','$imagenBinariaEscapada', '$descripcion', '$precio', '$stock');";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	}
	
	
	public function ActualizarProducto($idProducto,$nombre, $tipo, $descripcion, $precio, $stock)
	{
		$sql = "CALL SP_ActualizarProducto($idProducto,'$nombre','$tipo','$descripcion','$precio','$stock');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
	public function EliminarProducto($idProducto)
	{
		
		$sql = "CALL SP_EliminarProducto($idProducto);";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
}


?>