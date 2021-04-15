<?php
	include("../../controller/empresas/funciones_empresa.php");

	function obtener_empresas()
	{
		$empresas = get_empresas();

		return $empresas;
	}

	function fill_tr_empresa($empresas)
	{
		$tr_empresas = "";

		foreach ($empresas as $empresa) 
		{
			$tr_empresas.='
							<tr>								
								<td>'.$empres['empresa'].'</td>
								<td>'.$empres['domicilio'].'</td>
								<td>'.$empres['telefono'].'</td>
								<td>'.$empres['correo'].'</td>
								<td> <span>'.$empres['cantidad']."</span>".$empres['vacante'].'</td>
								<td>'.$empres['genero'].'</td>
								<td>'.$empres['edad'].'</td>
								<td>'.$empres['escolaridad'].'</td>
								<td>'.$empres['descripcion'].'</td>
								<td>'.$empres['salario'].'</td>
								<td>'.$empres['horario'].'</td>
								<td>'.$empres['prestaciones'].'</td>
								<td>'.$empres['observaciones'].'</td>
							</tr>
							'
		}

		return $tr_empresas;
	}