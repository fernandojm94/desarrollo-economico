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
					<th>Correo</th>
					<th>Dirección</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?= $tr_vacante; ?>
			</tbody>
		</table>
	</div>
</div>

<div id="div_modal_info_vacante"></div>

<script type="text/javascript">
	$('#tabla_vacantes').DataTable();
</script>

<script type="text/javascript">
	function fill_modal_info_vacante(id, nombre, empresa, domicilio, telefono, correo, vacante, cantidad, genero, edad, escolaridad, descripcion, salario, horario, prestaciones, observaciones)
	{

		var xmlhttp;

        if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }

        else{// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange=function(){

            if (xmlhttp.readyState==4 && xmlhttp.status==200){

                document.getElementById("div_modal_info_vacante").innerHTML=xmlhttp.responseText;
                //show_hide_modals();
                $('#modal_info_vacante').modal('show');
                // waitingDialog.hide();
            }
        }

        var datos_modal = "id=" + id + "&nombre=" + nombre + "&empresa=" + empresa + "&domicilio=" + domicilio  + "&telefono=" + telefono  + "&correo=" + correo  + "&vacante=" + vacante  + "&cantidad=" + cantidad  + "&genero=" + genero  + "&edad=" + edad  + "&escolaridad=" + escolaridad  + "&descripcion=" + descripcion  + "&salario=" + salario  + "&horario=" + horario  + "&prestaciones=" + prestaciones  + "&observaciones=" + observaciones;

        // waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
        xmlhttp.open("POST","./view/bolsa/modal_info_vacante.php",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send(datos_modal);
    }
</script>