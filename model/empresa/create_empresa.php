<?php
include('../../controller/empresas/funciones_empresa.php');

	$nombre = $_POST['nombre'];
	$empresa = $_POST['empresa'];
	$domicilio = $_POST['domicilio'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$vacante = $_POST['vacante'];
	$cantidad = $_POST['cantidad'];
	$genero = $_POST['genero'];
	$edad = $_POST['edad'];
	$escolaridad = $_POST['escolaridad'];
	$descripcion = $_POST['descripcion'];
	$salario = $_POST['salario'];
	$horario = $_POST['horario'];
	$prestaciones = $_POST['prestaciones'];
	$observaciones = $_POST['observaciones'];
	$fecha = date("Y-m-d");
	$vigencia = date("d-m-Y",strtotime($fecha."+ 1 month")); 
	$id = 0;
	$id = create_empresa($nombre, $empresa, $domicilio, $telefono, $correo, $vacante, $cantidad, $genero, $edad, $escolaridad, $descripcion, $salario, $horario, $prestaciones, $observaciones, $vigencia);
	if($id)
	{
		$mensaje = "correcto, ".$id;
	}else{
		$mensaje = "error";
	}

	echo $mensaje;

