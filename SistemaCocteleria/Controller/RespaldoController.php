<?php
include_once 'Model/RespaldoModel.php';

class RespaldoController
{
    private $vista;

    public function mostrarFormularioRespaldo()
    {
        $vista = "View/Admins/frmRespaldo.php";
		include_once("View/Admins/frmplantillaAdmin.php");
    }

    public function generarRespaldo()
    {
        if (isset($_FILES['ubicacion_guardado']) && $_FILES['ubicacion_guardado']['error'] === UPLOAD_ERR_OK) {
            $temp_file = $_FILES['ubicacion_guardado']['tmp_name'];
            $nombre_archivo = $_FILES['ubicacion_guardado']['name'];
            $extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);

            // Define la ubicación de destino y el nombre del archivo de respaldo con la fecha y hora actual
            $direccion = 'ruta/del/almacenamiento/' . date('Y-m-d_H-i-s') . '.' . $extension;

            if (move_uploaded_file($temp_file, $direccion)) {
                $respaldo = new clsRespaldo();
                $respaldoGenerado = $respaldo->generarRespaldo($direccion);

                if ($respaldoGenerado) {
                    // Redirigir a una página de éxito o mostrar un mensaje de éxito en la vista actual
                    header('Location: index.php?success=1');
                    exit();
                } else {
                    // Redirigir a una página de error o mostrar un mensaje de error en la vista actual
                    header('Location: index.php?error=1');
                    exit();
                }
            } else {
                // Hubo un error al mover el archivo a la ubicación deseada
                header('Location: index.php?error=1');
                exit();
            }
        } else {
            // Si el formulario no ha sido enviado o no se ha seleccionado un archivo, mostrar el formulario para elegir la ubicación de guardado
            include_once 'View/generar_respaldo_view.php';
        }
    }
}
?>

