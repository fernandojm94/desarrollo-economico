<?php 
	include("../../model/empresa/fill.php");
	
	$vacantes = obtener_empresas(); 
	$tr_vacante = fill_tr_empresa($vacantes);

?>

<div class="page-content">
	
	<div class="page-title">
		<h1>Bolsa de Trabajo</h1>
		<i class="fas fa-angle-double-right"></i>
		<h2>Vacantes</h2>
	</div>
	
	<div class="contenedor-tabla">
		<h3 align="center">Listado de Vacantes</h3>
		<table id="tabla_vacantes">
			<thead>
				<tr>
					<th>Puesto</th>
					<th>Empresa</th>
					<th>Teléfono</th>
					<th>Dirección</th>
					<th>Escolaridad</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?= $tr_vacante; ?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	$('#tabla_vacantes').DataTable();
</script>