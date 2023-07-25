<?php
include_once 'config/DBConnection.php';

class clsLogin extends clsconexion{

	
	public function buscausuario($usuario,$passw)
	{
		$sql = "CALL SP_ConsultarUsuario('$usuario','$passw');";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
	public function CrearUsuarios($nombre, $ap, $am, $usuario, $passw, $fecha, $sexo,$tipoUsuario)
	{
		$sql = "CALL SP_InsertarUsuario('$nombre','$ap','$am','$fecha','$sexo','$usuario','$passw','$tipoUsuario')";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
	public function ConsultaUsuarios()
	{
		$sql = "CALL SP_ConsultaUsuario2();";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
	public function EliminarUser($idUsuario)
	{
		
		$sql = "DELETE from tblusuarios where IDUsuario=$idUsuario;";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
	public function ActualizarUsuario($idusuario,$nombre,$ap,$am,$usuario,$passw,$fecha,$sexo,$tipoUsuario)
	{
		$sql = "CALL SP_ActualizarUsuario($idusuario,'$nombre','$ap','$am','$fecha','$sexo','$usuario','$passw','$tipoUsuario');";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	}
}


?>