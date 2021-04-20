<?php
include('../../controller/exe.php');

function create_persona($nombre, $edad, $domicilio, $telefono, $correo, $escolaridad, $habilidades, $observaciones)
{
	$sql = "INSERT INTO persona (nombre, edad, domicilio, telefono, correo, escolaridad, habilidades,observaciones)
				VALUES('".$nombre."', '".$edad."', '".$domicilio."', '".$telefono."', '".$correo."', '".$escolaridad."', '".$habilidades."', '".$observaciones."')";

	$result = querys($sql);

	return $result;
}