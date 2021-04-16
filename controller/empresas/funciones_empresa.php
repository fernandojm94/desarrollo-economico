<?php
include('../../controller/exe.php');

function create_empresa($nombre, $empresa, $domicilio, $telefono, $correo, $vacante, $cantidad, $genero, $edad, $escolaridad, $descripcion, $salario, $horario, $prestaciones, $observaciones, $vigencia)
{
	$sql = "INSERT INTO empresa (nombre, empresa, domicilio, telefono, correo, vacante, cantidad, genero, edad, escolaridad, descripcion, salario, horario, prestaciones, observaciones, vigencia, status) 
	VALUES('".$nombre."', '".$empresa."', '".$domicilio."', '".$telefono."', '".$correo."','".$vacante."', '".$cantidad."', '".$genero."','".$edad."', '".$escolaridad."', '".$descripcion."', '".$salario."', '".$horario."', '".$prestaciones."', '".$observaciones."', '".$vigencia."', 0)";

	$result = query_last_id($sql);

	return $result;
}

function update_status($id, $status)
{
	$sql = "UPDATE empresa SET status = $status WHERE id = $id";

	$result = querys($sql);

	return $result;
}

function get_empresas()
{
	$sql = " SELECT id, nombre, empresa, domicilio, telefono, correo, vacante, cantidad, genero, edad, escolaridad, descripcion, salario, horario, prestaciones, observaciones, vigencia
				FROM empresa
			 WHERE status = 1";

	$result = querys($sql);

	return $result;
}