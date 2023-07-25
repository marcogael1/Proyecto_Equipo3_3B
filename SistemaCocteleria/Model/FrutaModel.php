<?php
include_once 'config/DBConnection.php';

//este modelo no esta en funcionamiento, se espera utilizarlo con la creacion del carrito
class clsFruta extends clsconexion{

	public function consultaFruta() {
		
		$sql = "CALL SP_ConsultarFruta()";
		$resultado = $this->conectar->query($sql);
		return $resultado;
		   
	}
    public function insertarFruta() {
		
		$sql = "";
        $resultado = $this->conectar->query($sql);
		return $resultado;
		   
	}
	public function ActualizarProducto($id_inventario,$nombre,$stock,$id_proveedor,$fecha)
	{
		$sql = "UPDATE producto set NombreFruta='$nombre',stock=$stock,Fecha_ingreso=$fecha,Id_Proveedor=$id_proveedor 
		where Id_Inventario=$id_inventario;";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
	public function EliminarProducto($id_inventario)
	{
		
		$sql = "DELETE from tblinventario where Id_Inventario=$id_inventario;";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
}


?>