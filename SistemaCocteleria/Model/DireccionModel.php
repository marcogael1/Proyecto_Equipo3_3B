<?php
include_once 'config/DBConnection.php';

class clsDireccion extends clsconexion{

	public function consultaDirecciones() {
		
		$sql = "CALL SP_ConsultaDirecciones();";
		$resultado = $this->conectar->query($sql);
		return $resultado;
		   
	}
    public function insertarDireccion($estado1,$municipio,$colonia) {
		
		$sql = "CALL SP_InsertarDireccion('$estado1','$municipio','$colonia');";
        $resultado = $this->conectar->query($sql);
		return $resultado;
		   
	}
}
