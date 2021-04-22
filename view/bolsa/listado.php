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
					<th>Cantidad - Puesto</th>
					<th>Empresa</th>
					<th>Salario</th>
					<th>Horario</th>
					<th>Dirección</th>
					<th style="background: none;">Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?= $tr_vacante; ?>
			</tbody>
		</table>
	</div>
</div>

<div id="div_modal_info_vacante"></div>
<div id="div_modal_postularme"></div>

<script type="text/javascript">
	$('#tabla_vacantes').DataTable();
</script>

<script type="text/javascript">
	function forma_postular(){
		$('#form_postular').validate({
	        errorElement: 'div',
	        errorClass: 'help-block',
	        focusInvalid: false,
	        ignore: "",
	        rules: {
	            nombre_p: {
	        		minlength: 5,
	        		required: true
	        	},

	        	edad_p: {
	        		minlength: 2,
	        		required: true
	        	},

	        	domicilio_p: {
	        		minlength: 5,
	        		required: true
	        	},

	        	telefono_p: {
	        		minlength: 10,
	        		required: true
	        	},

	        	correo_p: {
	        		minlength: 5,
	        		required: true
	        	},

	        	escolaridad_p: {
	        		minlength: 5,
	        		required: true
	        	},

	        	habilidades_p: {
	        		minlength: 5,
	        		required: true
	        	},

	        	observaciones_p: {
	        		minlength: 5,
	        		required: true
	        	}
	        	
	        },

	        messages: {
	            nombre_p: {
	        		minlength: "Favor de ingresar información completa.",
	        		required: "Favor de llenar este campo"
	        	},

	        	edad_p: {
	        		minlength: "Favor de ingresar información completa.",
	        		required: "Favor de llenar este campo"
	        	},

	        	domicilio_p: {
	        		minlength: "Favor de ingresar información completa.",
	        		required: "Favor de llenar este campo"
	        	},

	        	telefono_p: {
	        		minlength: "Favor de ingresar información completa.",
	        		required: "Favor de llenar este campo"
	        	},

	        	correo_p: {
	        		minlength: "Favor de ingresar información completa.",
	        		required: "Favor de llenar este campo"
	        	},

	        	escolaridad_p: {
	        		minlength: "Favor de ingresar información completa.",
	        		required: "Favor de llenar este campo"
	        	},

	        	habilidades_p: {
	        		minlength: "Favor de ingresar información completa.",
	        		required: "Favor de llenar este campo"
	        	},

	        	observaciones_p: {
	        		minlength: "Favor de ingresar información completa.",
	        		required: "Favor de llenar este campo"
	        	}
	        },


	        highlight: function (e) {
	            $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
	        },

	        success: function (e) {
	            $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
	            $(e).remove();
	        },

	        errorPlacement: function (error, element) {
	            if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
	                var controls = element.closest('div[class*="col-"]');
	                if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
	                else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
	            }
	            else if(element.is('.select2')) {
	                error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
	            }
	            else if(element.is('.chosen-select')) {
	                error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
	            }
	            else error.insertAfter(element.parent());
	        },

	        submitHandler: function (form) {
	            var parametros_persona = {     
	            	"id" : $('#id_empresa').val(),
	            	"empresa" : $('#nombre_empresa').val(),
	            	"vacante" : $('#nombre_vacante').val(),              
	                "nombre" : $('#nombre_p').val(),
	                "edad" : $('#edad_p').val(),
	                "domicilio" : $('#domicilio_p').val(),
	                "telefono" : $('#telefono_p').val(),
	                "correo" : $('#correo_p').val(),
	                "escolaridad" : $('#escolaridad_p').val(),
	                "habilidades" : $('#habilidades_p').val(),
	                "observaciones" : $('#observaciones_p').val(),
	            };

	            //btn_guardar.disabled=true;
	            //waitingDialog.show('Guardando...', {dialogSize: 'sm', progressType: 'warning'});
	            $.ajax({
	                data:  parametros_persona,
	                url:   './model/persona/create_postular.php',
	                type:  'post',

	                success:  function (data) {
	                	let datos = data.split(',');

	                    if (datos[0]==='correcto'){
	                    	$('.modal').modal('hide');
	                        swal({
	                            title: "Guardado correctamente!",
	                            text: "Se comunicarán contigo si alguna empresa está interesado en tu perfil.",
	                            icon: "success",
	                            button: "Aceptar"
	                        }).then(function(){
	                        	pagecontent('view/bolsa/listado.php');
	                        });
	                    }

	                    if (data==='error'){
	                        swal({
	                            title: "¡Error!",
	                            text: "¡Ocurrió algo al guardar!",
	                            icon: "error",
	                            button: "Aceptar"
	                        });
	                    }

	                }
	            });
	        }
		});
	}

	function postularme(id, empresa, vacante){
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

                document.getElementById("div_modal_postularme").innerHTML=xmlhttp.responseText;
    	        $('#modal_info_vacante').modal('hide');
    	        $('#modal_info_vacante').on('hidden.bs.modal', function(e){
    	            $('#modal_postularme').modal('show');
    	        });

    	        forma_postular();

            }
        }

        var datos_modal = "id=" + id + "&empresa=" + empresa + "&vacante=" + vacante;

        // waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
        xmlhttp.open("POST","./view/bolsa/modal_postularme.php",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send(datos_modal);
	}

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