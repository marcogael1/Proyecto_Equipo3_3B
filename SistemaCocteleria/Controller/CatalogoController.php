<?php
include_once 'Model/CatalogoModel.php';

class CatalogoController
{
    private $vista;

    public function MostrarCatalogo()
    {
        $catalogo = new clsCatalogo();
        $productos = $catalogo->consultaProductos();

        $vista = "View/Public/frmcontenidopublico.php";
        include_once("View/Public/frmplantilla2.php");
    }

    public function MostrarCatalogoSesion()
    {
        $catalogo = new clsCatalogo();
        $productos = $catalogo->consultaProductos();

        $vista = "View/Public/frmcontenidopublicoSesion.php";
        include_once("View/Public/frmplantilla.php");
    }

    public function MostrarCatalogoPorCategoria()
    {
        if (isset($_POST['categoria'])) {
            $categoriaId = $_POST['categoria'];
    
            if (!empty($categoriaId)) {
                $catalogo = new clsCatalogo();
                $productos = $catalogo->consultaProductosPorCategoria($categoriaId);
    
                $vista = "View/Public/frmcontenidopublicoSesion.php";
                include_once("View/Public/frmplantilla2.php");
            } else {
                $this->MostrarCatalogoSesion();
            }
        } else {
            $this->MostrarCatalogoSesion();
        }
    }
    public function MostrarCatalogoPorCategoriaNosesion()
    {
        if (isset($_POST['categoria'])) {
            $categoriaId = $_POST['categoria'];
    
            if (!empty($categoriaId)) {
                $catalogo = new clsCatalogo();
                $productos = $catalogo->consultaProductosPorCategoria($categoriaId);
    
                $vista = "View/Public/frmcontenidopublico.php";
                include_once("View/Public/frmplantilla2.php"); 
            } else {
                $this->MostrarCatalogo();
            }
        } else {
            $this->MostrarCatalogo();
        }
    }
    
    public function MostrarDetalleProducto()
    {
        $productoId = $_GET['id'];
        $catalogo = new clsCatalogo();
        $Detalleproductos = $catalogo->consultaDetalle($productoId);

        $vista = "View/Public/frmdetalleproducto.php";
        include_once("View/Public/frmplantilla.php");
    }
}
?>
