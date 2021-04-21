<?php
	
	include('../../controller/empresas/funciones_empresa.php');
	
	echo '<script type="text/javascript" src="../../assets/jquery/jquery-3.4.1.js"></script>
		  <script type="text/javascript" src="../../assets/js/sweetalert.min.js"></script>';

	$id = $_GET['id'];
	$status = $_GET['status'];


	if(update_status($id, $status))
	{
		if($status == 1){
			$mensaje = "'Aprobado correctamente'";
		}else{
			$mensaje = "'Rechazado correctamente'"; 
		}

		echo '<script type="text/javascript">
				$(document).ready( function () {
					swal({
		                title: '.$mensaje.',
		                icon: "success",
		                button: "Aceptar"
		            }).then(function(){
		            	window.location.href = "http://desarrollo-economico.test";
		            });
				});
			 </script>';

	}
	else
	{
		echo
			'<script type="text/javascript">
			$(document).ready( function () {
				swal({
	                title: "Error al guardar!",
	                icon: "error",
	                button: "Aceptar"
	            }).then(function(){
	            	window.location.href = "http://desarrollo-economico.test";
	            });
	        });    
			</script>';
	}