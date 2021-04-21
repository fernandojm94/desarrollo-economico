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
			$datos = $empresa["id"].",'".$empresa["nombre"]."','".$empresa["empresa"]."','".$empresa["domicilio"]."',".$empresa["telefono"].",'".$empresa["correo"]."','".$empresa["vacante"]."',".$empresa["cantidad"].",'".$empresa["genero"]."','".$empresa["edad"]."','".$empresa["escolaridad"]."','".$empresa["descripcion"]."','".$empresa["salario"]."','".$empresa["horario"]."','".$empresa["prestaciones"]."','".$empresa["observaciones"]."'";

			$vigencia = date_create($empresa['vigencia']);
			$vigente = date_diff($fecha, $vigencia);
			
			if($vigente->format("%R%a days") >= 0)
			{
				$tr_empresas.='
							<tr>								
								<td> <span>'.$empresa['cantidad']." - "."</span>".$empresa['vacante'].'</td>
								<td>'.$empresa['empresa'].'</td>
								<td>'.$empresa['salario'].'</td>
								<td>'.$empresa['horario'].'</td>
								<td>'.$empresa['domicilio'].'</td>
								<td>
									<button title="Más Información" class="btn btn-xs btn-info" onclick="fill_modal_info_vacante('.$datos.');">
										<i class="fa fa-info"></i>
									</button>
								</td>
							</tr>
							';
			}else{
				update_status($empresa['id'], 0);
			}
		}

		return $tr_empresas;
	}