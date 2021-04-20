<?php
	include('../../controller/empresas/funciones_empresa.php');

	$id = $_GET['id'];
	$status = $_GET['status'];

	if(update_status($id, $status))
	{

	}else{
		
	}

		$url = "'http://desarrollo-economico.test'";
	echo $mensaje = '<meta http-equiv="Refresh" content="3; url='.$url.' "/>';