<?php

class MajorController
{
	private $vista;
	
	
	public function inicioAdmin()
	{	
		$vista="View/Admins/frmcontenidoadmin.php";
        include_once("View/Admins/frmplantillaAdmin.php");
    }

	public function inicioPublico()
	{	
		$vista="View/Public/frmcontenidopublico.php";
        include_once("View/Public/frmplantilla.php");
    }
}
?>