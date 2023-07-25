<?php
include_once 'config/DBConnection.php';

class clsEmpleado extends clsconexion{

	public function consultaEmpleados() {
		
		$sql = "CALL SP_ConsultaEmpleado();";
		$resultado = $this->conectar->query($sql);
		return $resultado;
		   
	}
    public function insertarEmpleado($nombre,$ap,$am,$email,$tel,$estado,$municipio,$colonia) {
		
		$sql = "CALL SP_InsertarEmpleado('$nombre','$ap','$am','$email','$tel','$estado','$municipio','$colonia');";
        $resultado = $this->conectar->query($sql);
		return $resultado;
		   
	}
	public function ActualizarEmpleado($idempleado,$nombre,$ap,$am,$email,$tel,$estado,$municipio,$colonia)
	{
		$sql = "CALL SP_ActualizarEmpleado($idempleado,'$nombre','$ap','$am','$email','$tel','$estado','$municipio','$colonia');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
	public function EliminarEmpleado($id_empleado)
	{
		
		$sql = "CALL SP_EliminarEmpleado($id_empleado);";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
}


?>