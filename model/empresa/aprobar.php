<?php
	include('../../controller/empresas/funciones_empresa.php');

	$id = $_GET['id'];
	$status = $_GET['status'];

	update_status($id, $status);
	
		$url = "'desarrollo-economico.jesusmaria.gob.mx'";
	echo $mensaje = '<meta http-equiv="Refresh" content="0; url='.$url.' "/>';