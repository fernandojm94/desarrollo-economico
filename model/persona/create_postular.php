<?php
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
	$id = create_persona($nombre, $edad, $domicilio, $telefono, $correo, $escolaridad, $habilidades, $observaciones);
	if($id)
	{
			$para = 'jose.espino@jesusmaria.gob.mx';
		$titulo = 'Alta de Persona';
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
								        		<div class="col-sm-8">'.$_POST['edad'].'</div>
								        	</div></td></tr>
								        	
								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Escolaridad:</b></div>
								        		<div class="col-sm-8">'.$_POST['escolaridad'].'</div>
								        	</div></td></tr>
								        	
								        	<tr><td><div class="row">
								        		<div align="right" class="col-sm-4"><b>Prestaciones:</b></div>
								        		<div class="col-sm-8">'.$_POST['habilidades'].'</div>
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
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						      </div>
						    </div>
						  </div>
						</div>
					';

	mail($para, $titulo, $mensaje, $cabeceras);

		$mensaje = "correcto, ".$id;
	}else{
		$mensaje = "error";
	}

	echo $mensaje;

