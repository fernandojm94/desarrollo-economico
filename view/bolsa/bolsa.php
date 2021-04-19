<div class="page-content">

	<div class="page-title">
		<h1>Bolsa de Trabajo</h1>
		<i class="fas fa-angle-double-right"></i>		
		<h2>Registro</h2>
	</div>

	<div class="registro">
		<div class="empresa" type="button" data-toggle="modal" data-target="#modal_empresa">
			<i class="fas fa-building fa-10x"></i>
			<span>Empresa</span>
		</div>
		<div class="empleado" type="button" data-toggle="modal" data-target="#modal_trabajo">
			<i class="fas fa-search fa-10x"></i>
			<span>Busco Trabajo</span>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_empresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
      		<h5 style="color: black; font-weight: bolder;">¿Buscas empleados?</h5>
      		<h2 style="margin-left: 1em; color: grey;">Registra la vacante!</h2>
      	</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form id="form_empresa" name="form_empresa" method="post">  
		  <div class="form-group row">
		    <label for="nombre" class="col-sm-2 col-form-label">Nombre de quien publica:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar nombre aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Nombre de la Empresa:</label>
		    <div class="col-sm-10">
		      <input class="form-control" id="empresa" placeholder="Ingresar empresa aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Domicilio:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="domicilio" placeholder="Ingresar domicilio aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Teléfono:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="telefono" placeholder="Ingresar teléfono aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Correo:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="correo" placeholder="Ingresar correo aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Vacante:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="vacante" placeholder="Ingresar vacante aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Cantidad:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="cantidad" placeholder="Ingresar cantidad aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Genero:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="genero" placeholder="Ingresar género aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Edad:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="edad" placeholder="Ingresar edad aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Escolaridad:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="escolaridad" placeholder="Ingresar escolaridad aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Descripción:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="descripcion" placeholder="Ingresar descripción aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Salario:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="salario" placeholder="Ingresar salario aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Horario:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="horario" placeholder="Ingresar horario aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Prestaciones:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="prestaciones" placeholder="Ingresar prestaciones aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Observaciones:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="observaciones" placeholder="Ingresar observaciones aquí...">
		    </div>
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="form_empresa" class="btn btn-primary"><i class="fa fa-user"></i>Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_trabajo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<div class="modal-title">
      		<h5 style="color: black; font-weight: bolder;">!Regístrate</h5>
      		<h2 style="margin-left: 1em; color: grey;">te estamos buscando!</h2>
      	</div>
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="form_trabajo" name="form_trabajo" method="post">  
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nombre_p" placeholder="Ingresar nombre aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Edad:</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="edad_p" placeholder="Ingresar edad aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Domicilio:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="domicilio_p" placeholder="Ingresar domicilio aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Teléfono:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="telefono_p" placeholder="Ingresar teléfono aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Correo:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="correo_p" placeholder="Ingresar correo aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Escolaridad:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="escolaridad_p" placeholder="Ingresar escolaridad aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Habilidades:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="habilidades_p" placeholder="Ingresar habilidades aquí...">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Observaciones:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="observaciones_p" placeholder="Ingresar observaciones aquí...">
		    </div>
		  </div>
		</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" form="form_trabajo" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$('#form_empresa').validate({
        errorElement: 'div',
        errorClass: 'help-block',
        focusInvalid: false,
        ignore: "",
        rules: {
            nombre: {
        		minlength: 5
        	}
        },

        messages: {
            nombre: {
        		minlength: "Ingresar un nombre más largo"
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
            
    		var parametros_empresa = {                     
                "nombre" : $('#nombre').val(),
                "empresa" : $('#empresa').val(),
                "domicilio" : $('#domicilio').val(),
                "telefono" : $('#telefono').val(),
                "correo" : $('#correo').val(),
                "vacante" : $('#vacante').val(),
                "cantidad" : $('#cantidad').val(),
                "genero" : $('#genero').val(),
                "edad" : $('#edad').val(),
                "escolaridad" : $('#escolaridad').val(),
                "descripcion" : $('#descripcion').val(),
                "salario" : $('#salario').val(),
                "horario" : $('#horario').val(),
                "prestaciones" : $('#prestaciones').val(),
                "observaciones" : $('#observaciones').val(),
            };
            //btn_guardar.disabled=true;
            //waitingDialog.show('Guardando...', {dialogSize: 'sm', progressType: 'warning'});
            $.ajax({
                data:  parametros_empresa,
                url:   './model/empresa/create_empresa.php',
                type:  'post',
               /* processData: false,
                contentType: false,*/

                success:  function (data) {

                    if (data==='correcto'){
                    	// $('#modal_update_personal').modal('hide');
                        swal({
                            title: "Guardado correctamente!",
                            icon: "success",
                            button: "Aceptar"
                        }).then(function(){
                        	cambiarcont('view/productos/asignar.php');
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

	$('#form_trabajo').validate({
        errorElement: 'div',
        errorClass: 'help-block',
        focusInvalid: false,
        ignore: "",
        rules: {
            nombre_p: {
        		minlength: 5
        	}
        	
        },

        messages: {
            nombre_p: {
        		minlength: "Ingresar un nombre más largo"
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
                url:   './model/persona/create_persona.php',
                type:  'post',

                success:  function (data) {

                    if (data==='correcto'){
                    	$('#modal_update_personal').modal('hide');
                        swal({
                            title: "Guardado correctamente!",
                            icon: "success",
                            button: "Aceptar"
                        }).then(function(){
                        	cambiarcont('view/productos/asignar.php');
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
</script>