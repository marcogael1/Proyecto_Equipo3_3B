<?php
include_once 'Model/ProductsModel.php';
class ProductosController
{
    private $vista;
    public function insertarProducto()
    {
        $producto = new clsProductos();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['txtnombre'];
            $descripcion = $_POST['txtdescripcion'];
            $tipo = $_POST['selectTipo'];
            $precio = floatval($_POST['txtprecio']); // Convertir a tipo float
            $stock = floatval($_POST['txtstock']); // Convertir a tipo float

            // Verificar si se seleccionó un archivo
            if (!empty($_FILES['txtimagen']) && $_FILES['txtimagen']['error'] === UPLOAD_ERR_OK) {
                $imagen = $_FILES['txtimagen'];

                $producto->insertarProductos($nombre, $imagen, $tipo, $descripcion, $precio, $stock);
            } else {
                echo "Error: No se seleccionó un archivo válido.";
            }
        }

        // Obtener los datos de los productos
        $productos = $producto->consultaProductos();

        // Pasar los datos de los productos a la vista
        $vista = "View/Admins/Productos/frmProductos.php";
        include_once("View/Admins/frmplantillaAdmin.php");
    }
    public function EditarProducto()
    {
        $producto = new clsProductos();
        if (!empty($_POST)) {
            $idProducto = $_POST['id1'];
            $nombre = $_POST['txtnombre1'];
            $descripcion = $_POST['txtdescripcion1'];
            $tipo = $_POST['txttipo1'];
            $precio = floatval($_POST['txtprecio1']); // Convertir a tipo float
            $stock = floatval($_POST['txtstock1']); // Convertir a tipo float
            $producto->ActualizarProducto($idProducto,$nombre, $tipo, $descripcion, $precio, $stock);
            }
            $productos = $producto->consultaProductos();

            $vista = "View/Admins/Productos/frmProductos.php";
            include_once("View/Admins/frmplantillaAdmin.php");
        }
    public function eliminarProducto()
    {
        $producto = new clsProductos();

        if (!empty($_GET['id'])) {
            $idProducto = $_GET['id'];
            $producto->EliminarProducto($idProducto);
        }
        $productos = $producto->consultaProductos();

        $vista = "View/Admins/Productos/frmProductos.php";
        include_once("View/Admins/frmplantillaAdmin.php");
    }

}
?>