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
	$vigencia = date("Y-m-d",strtotime($fecha."+ 1 month")); 
	$id = 0;
	$id = create_empresa($nombre, $empresa, $domicilio, $telefono, $correo, $vacante, $cantidad, $genero, $edad, $escolaridad, $descripcion, $salario, $horario, $prestaciones, $observaciones, $vigencia);
	if($id)
	{
		$para = 'jose.espino@jesusmaria.gob.mx';
		$titulo = 'Alta de Empresa';
		$cabeceras = 'From: bolsa-tranajo@jesusmaria.gob.mx' . "\r\n" .
				    'Reply-To: jose.espino@jesusmaria.gob.mx' . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();

		$mensaje ='
						<div class="modal fade" id="modal_info_vacante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <div class="modal-title">
						      		<h5 style="color: black; font-weight: bolder;">'.$_POST['empresa'].'</h5>
						      		<h2 style="margin-left: 1em; color: grey;">'.$_POST['vacante'].'</h2>
						      	</div>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <div>
						        	<table class="table table-striped table-hover">
										<tbody>
											<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Nombre de quien publica:</b></div>
								        		<div class="col-sm-8">'.$_POST['nombre'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Domicilio:</b></div>
								        		<div class="col-sm-8">'.$_POST['domicilio'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Teléfono:</b></div>
								        		<div class="col-sm-8">'.$_POST['telefono'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Correo electrónico:</b></div>
								        		<div class="col-sm-8">'.$_POST['correo'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Vacante:</b></div>
								        		<div class="col-sm-8">'.$_POST['vacante'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Cantidad de vacantes:</b></div>
								        		<div class="col-sm-8">'.$_POST['cantidad'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Género:</b></div>
								        		<div class="col-sm-8">'.$_POST['genero'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Edad:</b></div>
								        		<div class="col-sm-8">'.$_POST['edad'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Escolaridad:</b></div>
								        		<div class="col-sm-8">'.$_POST['escolaridad'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Descripción:</b></div>
								        		<div class="col-sm-8">'.$_POST['descripcion'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Salario:</b></div>
								        		<div class="col-sm-8">'.$_POST['salario'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Horario:</b></div>
								        		<div class="col-sm-8">'.$_POST['horario'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Prestaciones:</b></div>
								        		<div class="col-sm-8">'.$_POST['prestaciones'].'</div>
								        	</div></td></tr>

								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Observaciones:</b></div>
								        		<div class="col-sm-8">'.$_POST['observaciones'].'</div>
								        	</div></td></tr>
										</tbody>
									</table>
						        	
						        </div>
						      </div>
						      <div class="modal-footer">

						        <button type="button" class="btn btn-secondary" data-dismiss="modal">
						        <i class="fa fa-times"></i>
						        &nbsp;Cerrar
						        </button>

						        <a type="button" class="btn btn-danger" href="http://desarrollo-economico.test/model/empresa/aprobar.php?id='.$id.'&status=0">
						        	<i class="fa fa-ban"></i>
						        	&nbsp;Rechazar
						        </a>

						        <a type="button" class="btn btn-success" href="http://desarrollo-economico.test/model/empresa/aprobar.php?id='.$id.'&status=1">
						        	<i class="fa fa-check"></i>
						        	&nbsp;Aprobar
						        </a>

						      </div>
						    </div>
						  </div>
						</div>
					';

	mail($para, $titulo, $mensaje, $cabeceras);
		$mensaje = "correcto";
	}else{
		$mensaje = "error";
	}

	echo $mensaje;

