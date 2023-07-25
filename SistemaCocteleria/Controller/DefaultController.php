<?php
include_once 'Model/CatalogoModel.php';
class DefaultController{

    private $vista;

    public function index(){
        $catalogo = new clsCatalogo();
        $productos = $catalogo->consultaProductos();

        $vista = "View/Public/frmcontenidopublico.php";
        include_once("View/Public/frmplantilla2.php");
    }
}
?>