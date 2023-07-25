<?php
include_once 'config/DBConnection.php';

class clsProveedor extends clsconexion{

	public function consultaProveedores() {
		
		$sql = "CALL SP_ConsultaProveedor();";
		$resultado = $this->conectar->query($sql);
		return $resultado;
		   
	}
    public function insertarProveedor($nombre,$colonia,$tel,$correo) {
		
		$sql = "CALL SP_InsertarProveedor('$nombre','$colonia','$correo','$tel');";
        $resultado = $this->conectar->query($sql);
		return $resultado;
		   
	}
	public function ActualizarProveedor($idproveedor, $nombre,$colonia,$telefono,$email)
	{
		$sql = "CALL SP_ActualizarProveedor($idproveedor,'$nombre','$colonia','$telefono','$email');";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	}
	public function EliminarProveedor($idProveedor)
	{
		
		$sql = "CALL SP_EliminarProveedor($idProveedor)";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
}
