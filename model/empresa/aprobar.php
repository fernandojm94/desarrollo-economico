<?php
	include('../../controller/empresas/funciones_empresa.php');

	$id = $_GET['id'];
	$status = $_GET['status'];

	if(update_status($id, $status)){
		if($status == 1){
			$mensaje = "Aprobado correctamente";
		}else{
			$mensaje = "Rechazado correctamente"; 
		}?>

		<script type="text/javascript">
			swal({
                title: <?php echo $mensaje ?>,
                icon: "success",
                button: "Aceptar"
            }).then(function(){
            	pagecontent('view/bolsa/listado.php');
            });
		</script>
	<?php}else{?>
		<script type="text/javascript">
			swal({
                title: "Error al guardar!",
                icon: "error",
                button: "Aceptar"
            }).then(function(){
            	pagecontent('view/bolsa/listado.php');
            });
		</script>
	<?php}
	
		$url = "'http://desarrollo-economico.test'";
	$mensaje = '<meta http-equiv="Refresh" content="3; url='.$url.' "/>';