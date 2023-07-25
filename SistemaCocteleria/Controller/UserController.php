<?php
session_start();
include_once 'Model/UserModel.php';
include_once 'Model/CatalogoModel.php';

class UserController
{
	public $vista;


	public function inicio()
	{
		include_once("View/frmLogin.php");
	}

	public function Acceder()
	{
		$login = new clsLogin();

		if (!empty($_POST)) {
			$usuario = $_POST['txtusuario'];
			$passw = $_POST['txtpassword'];
			$datos = $login->buscausuario($usuario, $passw);

			if ($datos->num_rows > 0) {
				$usuario = $datos->fetch_object();
				$_SESSION['TipoUsuario'] = $usuario->Tipo;

				//si se detecta que el tipo de usuario es administrador, carga la plantilla correspondiente
				if ($_SESSION['TipoUsuario'] === 'Administrador') {
					$vista = "View/Admins/frmcontenidoadmin.php"; //contenido de administrador
					include_once("View/Admins/frmplantillaAdmin.php"); //plantilla de administrador

				} else { //si el tipo de usuario no es administrador, automaticamente carga la de cliente 
					$catalogo = new clsCatalogo();
					$productos = $catalogo->consultaProductos();
					$vista = "View/Public/frmcontenidopublicoSesion.php";
					include_once("View/Public/frmplantilla.php");
				}
			} else {
				echo '<script>alert("Usuario o contraseña incorrectos. Ingresa credenciales válidas o contacta a un administrador.");</script>';
				include_once("View/frmLogin.php");
			}
		}
	}
	public function CrearUsuario()
	{
		$login = new clsLogin();
		if (!empty($_POST)) {
			$nombre = $_POST['txtnombre'];
			$ap = $_POST['txtpaterno'];
			$am = $_POST['txtmaterno'];
			$usuario = $_POST['txtusuario'];
			$passw = $_POST['txtpassword'];
			$fecha = $_POST['txtfecha'];
			$sexo = $_POST['selectTipo'];
			$tipoUsuario = "Cliente";
			$login->CrearUsuarios($nombre, $ap, $am, $usuario, $passw, $fecha, $sexo, $tipoUsuario);
			include_once("View/frmLogin.php");
		} else {
			$vista = "View/frmAgregarUsuario.php";
			include_once("View/Public/frmplantilla2.php");
		}
	}
	public function CrearUsuarioAdmin()
	{
		$login = new clsLogin();
		if (!empty($_POST)) {
			$nombre = $_POST['txtnombre'];
			$ap = $_POST['txtpaterno'];
			$am = $_POST['txtmaterno'];
			$usuario = $_POST['txtusuario'];
			$passw = $_POST['txtpassword'];
			$fecha = $_POST['txtfecha'];
			$sexo = $_POST['selectTipo'];
			$tipoUsuario = $_POST['selectTipo2'];
			$login->CrearUsuarios($nombre, $ap, $am, $usuario, $passw, $fecha, $sexo, $tipoUsuario);
			$usuarios = $login->ConsultaUsuarios();
			$vista = "View/Admins/frmCrearUsuariosAdmin.php";
			include_once("View/Admins/frmplantillaAdmin.php");
		} else {
			$usuarios = $login->ConsultaUsuarios();
			$vista = "View/Admins/frmCrearUsuariosAdmin.php";
			include_once("View/Admins/frmplantillaAdmin.php");
		}
	}
	public function eliminarUsuario()
	{
		$login = new clsLogin();

		if (!empty($_GET['id'])) {
			$idUsuario = $_GET['id'];
			$login->EliminarUser($idUsuario);
		}
		$usuarios = $login->ConsultaUsuarios();

		$vista = "View/Admins/frmCrearUsuariosAdmin.php";
		include_once("View/Admins/frmplantillaAdmin.php");
	}
	public function EditarUsuario()
	{
		$login = new clsLogin();
		if (!empty($_POST)) {
			$idusuario = $_POST['id'];
			$nombre = $_POST['txtnombre1'];
			$ap = $_POST['txtpaterno'];
			$am = $_POST['txtmaterno'];
			$usuario = $_POST['txtusuario'];
			$passw = $_POST['txtpassword'];
			$fecha = $_POST['txtfecha'];
			$sexo = $_POST['txtsexo'];
			$tipoUsuario = $_POST['txttipo'];
			$login->ActualizarUsuario($idusuario, $nombre, $ap, $am, $usuario, $passw, $fecha, $sexo, $tipoUsuario);
		}
		$usuarios = $login->ConsultaUsuarios();

		$vista = "View/Admins/frmCrearUsuariosAdmin.php";
		include_once("View/Admins/frmplantillaAdmin.php");
	}

	public function cerrarsesion()
	{
		session_destroy();
		$vista = ("View/Public/frmcontenidopublico.php");
		include_once("View/Public/frmplantilla2.php");
	}

}
?>