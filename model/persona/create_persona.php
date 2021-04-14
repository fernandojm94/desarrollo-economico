<?php
include('../../controller/personas/funciones_persona.php');

	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$domicilio = $_POST['domicilio'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];	
	$escolaridad = $_POST['escolaridad'];
	$habilidades = $_POST['habilidades'];
	$observaciones = $_POST['observaciones'];
	$id = 0;
	$id = create_persona($nombre, $edad, $domicilio, $telefono, $correo, $escolaridad, $habilidades $observaciones);
	if($id)
	{
		$mensaje = "correcto, ".$id;
	}else{
		$mensaje = "error";
	}

	echo $mensaje;

