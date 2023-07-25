<?php
include_once 'Model/DireccionModel.php';
class DireccionesController
{
	private $vista;
    public function insertarDirecciones()
    {
        $direccion = new clsDireccion();
        
        if (!empty($_POST)) {
            $estado1 = $_POST['selectEstado'];
            $municipio = $_POST['selectMunicipio'];
            $colonia = $_POST['txtcolonia'];
            $direccion->insertarDireccion($estado1,$municipio,$colonia);
        }
        
        // Obtener los datos de los estados
        $direcciones = $direccion->consultaDirecciones();
        
        // Pasar los datos de los estados a la vista
        $vista = "View/Admins/frmDirecciones.php";
        include_once("View/Admins/frmplantillaAdmin.php");
       
    }

}
?>