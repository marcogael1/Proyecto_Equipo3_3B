<?php

include_once 'Model/ReportesModel.php';
include_once 'Libreria/fpdf.php';

class ReportesController
{
    private $vista;

    public function IniciarVista()
    {
        $vista = "View/Admins/Reportes/frmReportesProductos.php";
        include_once("View/Admins/frmplantillaAdmin.php");
    }
    public function reporteProductos()
    {
        // Crear el objeto FPDF
        $pdf = new FPDF();

        // Agregar una página
        $pdf->AddPage();
        $pdf->Cell(190,30,$pdf->Image('Img/logo.jpg',130,12,60,30),0,1,'R');

        // Establecer la fuente y el tamaño del título
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Reporte de Productos', 0, 1, 'C');

        // Consultar los usuarios a la base de datos
        $productos = new clsReportes();
        $Consultas = $productos->consultaProductos();

        // Establecer la fuente y el tamaño del contenido de la tabla
        $pdf->SetFont('Arial', '', 12);

        // Imprimir los datos de la tabla
        $pdf->Cell(40, 10, 'Producto', 1, 0, 'C');
        $pdf->Cell(90, 10, 'Descripcion', 1, 0, 'C');
        $pdf->Cell(20, 10, 'Tipo', 1, 0, 'C');
        $pdf->Cell(20, 10, 'Precio', 1, 0, 'C');
        $pdf->Cell(20, 10, 'Stock', 1, 1, 'C');


        foreach ($Consultas as $consulta) {
            $nombre = $pdf->GetStringWidth($consulta['Nombre']) > 50 ? substr($consulta['Nombre'], 0, 18) . '...' : $consulta['Nombre'];
            $descripcion = $pdf->GetStringWidth($consulta['Descripcion']) > 90 ? substr($consulta['Descripcion'], 0, 33) . '...' : $consulta['Descripcion'];

            $pdf->Cell(40, 10, $nombre, 1, 0, 'C');
            $pdf->Cell(90, 10, $descripcion, 1, 0, 'C');
            $pdf->Cell(20, 10, $consulta['Tipo'], 1, 0, 'C');
            $pdf->Cell(20, 10, $consulta['Precio'], 1, 0, 'C');
            $pdf->Cell(20, 10, $consulta['Stock'], 1, 1, 'C');
        }
        // Salida del PDF
        $pdf->Output();
    }
    public function reporteProductosTipo()
    {

        // Verificar si se envió el formulario
        if (!empty($_POST['selectTipo'])) {
            // Obtener el tipo ingresado en el formulario
            $tipo = $_POST['selectTipo'];

            // Crear el objeto FPDF
            $pdf = new FPDF();

            // Agregar una página
            $pdf->AddPage();
            $pdf->Cell(190,30,$pdf->Image('Img/logo.jpg',130,12,60,30),0,1,'R');

            // Establecer la fuente y el tamaño del título
            $pdf->SetFont('Arial', 'B', 16);
            $pdf->Cell(0, 10, 'Reporte de Productos por Tipo', 0, 1, 'C');

            // Consultar los productos a la base de datos filtrados por tipo
            $productos = new clsReportes();
            $consultaProductos = $productos->consultaProductosPorTipo($tipo);

            if (!empty($consultaProductos)) {
                // Establecer la fuente y el tamaño del contenido de la tabla
                $pdf->SetFont('Arial', '', 12);

                $pdf->Cell(50, 10, 'Producto', 1, 0, 'C');
                $pdf->Cell(80, 10, 'Descripcion', 1, 0, 'C');
                $pdf->Cell(20, 10, 'Tipo', 1, 0, 'C');
                $pdf->Cell(20, 10, 'Precio', 1, 0, 'C');
                $pdf->Cell(20, 10, 'Stock', 1, 1, 'C');


                foreach ($consultaProductos as $consulta) {
                    $nombre = $pdf->GetStringWidth($consulta['Nombre']) > 50 ? substr($consulta['Nombre'], 0, 18) . '...' : $consulta['Nombre'];
                    $descripcion = $pdf->GetStringWidth($consulta['Descripcion']) > 90 ? substr($consulta['Descripcion'], 0, 33) . '...' : $consulta['Descripcion'];

                    $pdf->Cell(50, 10, $nombre, 1, 0, 'C');
                    $pdf->Cell(80, 10, $descripcion, 1, 0, 'C');
                    $pdf->Cell(20, 10, $consulta['Tipo'], 1, 0, 'C');
                    $pdf->Cell(20, 10, $consulta['Precio'], 1, 0, 'C');
                    $pdf->Cell(20, 10, $consulta['Stock'], 1, 1, 'C');
                }

                // Salida del PDF
                $pdf->Output();
            } else {
                echo "No se encontraron productos con el tipo ingresado.";
            }
        } else {
            $vista = "View/Admins/Reportes/frmReportesProductos.php";
            include_once("View/Admins/frmplantillaAdmin.php");
        }
    }
}
?>