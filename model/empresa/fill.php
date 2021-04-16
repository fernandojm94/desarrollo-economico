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

		$fecha = date_create(date("Y-m-d"));

		foreach ($empresas as $empresa) 
		{
			$vigencia = date_create($empresa['vigencia']);
			$vigente = date_diff($fecha, $vigencia);
			
			if($vigente->format("%R%a days") >= 0)
			{
				$tr_empresas.='
							<tr>								
								<td> <span>'.$empresa['cantidad']."  "."</span>".$empresa['vacante'].'</td>
								<td>'.$empresa['empresa'].'</td>
								<td>'.$empresa['telefono'].'</td>
								<td>'.$empresa['domicilio'].'</td>
								<td>'.$empresa['escolaridad'].'</td>
								
							</tr>
							';
			}else{
				update_status($empresa['id'], 0);
			}
		}

		return $tr_empresas;
	}