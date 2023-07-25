<?php
include_once 'Model/SupplierModel.php';
class ProveedoresController
{
    private $vista;
    public function insertarProveedor()
    {
        $proveedor = new clsProveedor();

        if (!empty($_POST)) {
            $nombre = $_POST['txtnombre'];
            $telefono = $_POST['txttelefono'];
            $email = $_POST['txtemail'];
            $colonia = $_POST['txtcolonia'];
            $proveedor->insertarProveedor($nombre, $colonia, $telefono, $email);
        }

        // Obtener los datos de los proveedores
        $proveedores = $proveedor->consultaProveedores();

        // Pasar los datos de los proveedores a la vista
        $vista = "View/Admins/Proveedores/frmProveedores.php";
        include_once("View/Admins/frmplantillaAdmin.php");
    }

    public function EditarProveedor()
    {
        $proveedor=new clsProveedor();
        if (!empty($_POST)) {
        $idproveedor= $_POST['id'];
        $nombre = $_POST['txtnombre'];
        $telefono = $_POST['txttelefono'];
        $email = $_POST['txtemail'];
        $colonia = $_POST['txtcolonia'];
        $proveedor-> ActualizarProveedor($idproveedor, $nombre,$colonia,$email,$telefono);
        }
        $proveedores = $proveedor->consultaProveedores();

        $vista = "View/Admins/Proveedores/frmProveedores.php";
        include_once("View/Admins/frmplantillaAdmin.php");
    }
    
    public function eliminarProveedor()
    {
        $proveedor = new clsProveedor();

        if (!empty($_GET['id'])) {
            $idProveedor = $_GET['id'];
            $proveedor->eliminarProveedor($idProveedor);
        }
        $proveedores = $proveedor->consultaProveedores();

        $vista = "View/Admins/Proveedores/frmProveedores.php";
        include_once("View/Admins/frmplantillaAdmin.php");
    }

}
?>