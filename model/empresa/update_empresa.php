<?php
include('../../controller/empresas/funciones_empresa.php');

	$id = $_GET['id'];
	$status = $_GET['status'];

	if(update_status($id, $status))
	{
		$mensaje = "correcto";
	}else{
		$mensaje = "error";
	}

echo $mensaje