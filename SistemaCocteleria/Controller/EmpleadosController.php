<?php
include_once 'Model/EmployModel.php';
class EmpleadosController{
    private $vista;
    public function insertarEmpleado()
    {
        $empleado = new clsEmpleado();
        
        if (!empty($_POST)) {
            $nombre = $_POST['txtnombre'];
            $ap = $_POST['txtpaterno'];
            $am = $_POST['txtmaterno'];
            $email = $_POST['txtcorreo'];
            $tel=$_POST['txttel'];
            $estado=$_POST['selectEstado'];
            $municipio=$_POST['selectMunicipio'];
            $colonia=$_POST['selectColonia'];
            $empleado->insertarEmpleado($nombre,$ap,$am,$email,$tel,$estado,$municipio,$colonia);
        }
        
        // Obtener los datos de los proveedores
        $empleados = $empleado->consultaEmpleados();
        
        // Pasar los datos de los proveedores a la vista
        $vista = "View/Admins/frmEmpleados.php";
        include_once("View/Admins/frmplantillaAdmin.php");
    }
    public function EditarProducto()
    {
        $empleado = new clsEmpleado();
        if (!empty($_POST)) {
            $idempleado = $_POST['id1'];
            $nombre = $_POST['txtnombre1'];
            $ap = $_POST['txtap1'];
            $am = $_POST['txtam1'];
            $email = $_POST['txtcorreo1'];
            $tel=$_POST['txttel1'];
            $estado=$_POST['txtestado1'];
            $municipio=$_POST['txtmunicipio1'];
            $colonia=$_POST['txtcolonia1'];
            $empleado->ActualizarEmpleado($idempleado,$nombre,$ap,$am,$email,$tel,$estado,$municipio,$colonia);
            }
            $empleados = $empleado->consultaEmpleados();

            $vista = "View/Admins/frmEmpleados.php";
            include_once("View/Admins/frmplantillaAdmin.php");
        }
    
    public function EliminarEmpleado()
    {
    $empleado = new clsEmpleado();
    
    if (!empty($_GET['id'])) {
        $idempleado = $_GET['id'];
        $empleado->EliminarEmpleado($idempleado);
    }
    $empleados = $empleado->consultaEmpleados();
    
    $vista = "View/Admins/frmEmpleados.php";
    include_once("View/Admins/frmplantillaAdmin.php");
    }

}
?>