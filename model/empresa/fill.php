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
		$fecha = date("Y-m-d");

		foreach ($empresas as $empresa) 
		{
			$vigente = date_diff($empresa['vigencia'], $fecha);

			if($vigente >= 0)
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
							';
			}else{
				update_status($empresa['id'], 0);
			}
		}

		return $tr_empresas;
	}