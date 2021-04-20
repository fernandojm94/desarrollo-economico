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
      	<form id="form_empresa" method="post">  
		  <div class="form-group row">
		    <label for="nombre" class="col-sm-2 col-form-label">Nombre de quien publica:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar nombre aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="empresa" class="col-sm-2 col-form-label">Nombre de la Empresa:</label>
		    <div class="col-sm-10">
		      <input class="form-control" id="empresa" name="empresa" placeholder="Ingresar empresa aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="domicilio" class="col-sm-2 col-form-label">Domicilio:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Ingresar domicilio aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
		    <div class="col-sm-10">
		      <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingresar teléfono aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="correo" class="col-sm-2 col-form-label">Correo:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresar correo aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="vacante" class="col-sm-2 col-form-label">Vacante:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="vacante" name="vacante" placeholder="Ingresar vacante aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="cantidad" class="col-sm-2 col-form-label">Cantidad:</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ingresar cantidad aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="genero" class="col-sm-2 col-form-label">Genero:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="genero" name="genero" placeholder="Ingresar género aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="edad" class="col-sm-2 col-form-label">Edad:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingresar edad aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="escolaridad" class="col-sm-2 col-form-label">Escolaridad:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="escolaridad" name="escolaridad" placeholder="Ingresar escolaridad aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresar descripción aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="salario" class="col-sm-2 col-form-label">Salario:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="salario" name="salario" placeholder="Ingresar salario aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="horario" class="col-sm-2 col-form-label">Horario:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="horario" name="horario" placeholder="Ingresar horario aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="prestaciones" class="col-sm-2 col-form-label">Prestaciones:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="prestaciones" name="prestaciones" placeholder="Ingresar prestaciones aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="observaciones" class="col-sm-2 col-form-label">Observaciones:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Ingresar observaciones aquí..." required>
		    </div>
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Cerrar</button>
        <button type="submit" form="form_empresa" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Guardar</button>
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
		    <label for="nombre_p" class="col-sm-2 col-form-label">Nombre:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nombre_p" name="nombre_p" placeholder="Ingresar nombre aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="edad_p" class="col-sm-2 col-form-label">Edad:</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="edad_p" name="edad_p" placeholder="Ingresar edad aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="domicilio_p" class="col-sm-2 col-form-label">Domicilio:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="domicilio_p" name="domicilio_p" placeholder="Ingresar domicilio aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="telefono_p" class="col-sm-2 col-form-label">Teléfono:</label>
		    <div class="col-sm-10">
		      <input type="tel" class="form-control" id="telefono_p" name="telefono_p" placeholder="Ingresar teléfono aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="correo_p" class="col-sm-2 col-form-label">Correo:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="correo_p" name="correo_p" placeholder="Ingresar correo aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="escolaridad_p" class="col-sm-2 col-form-label">Escolaridad:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="escolaridad_p" name="escolaridad_p" placeholder="Ingresar escolaridad aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="habilidades_p" class="col-sm-2 col-form-label">Habilidades:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="habilidades_p" name="habilidades_p" placeholder="Ingresar habilidades aquí..." required>
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="observaciones_p" class="col-sm-2 col-form-label">Observaciones:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="observaciones_p" name="observaciones_p" placeholder="Ingresar observaciones aquí..." required>
		    </div>
		  </div>
		</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Cerrar</button>
        <button type="submit" form="form_trabajo" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Guardar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$('#form_empresa').validate({
        errorElement: 'div',
        errorClass: 'help-block',
        focusInvalid: true,
        ignore: "",
        rules: {
            nombre: {
        		minlength: 5,
        		required: true
        	},

        	empresa: {
        		minlength: 5,
        		required: true
        	},

        	domicilio: {
        		minlength: 5,
        		required: true
        	},

        	telefono: {
        		minlength: 10,
        		required: true
        	},

        	correo: {
        		minlength: 5,
        		required: true
        	},

        	vacante: {
        		minlength: 5,
        		required: true
        	},

        	cantidad: {
        		required: true
        	},

        	genero: {
        		minlength: 5,
        		required: true
        	},

        	edad: {
        		required: true
        	},

        	escolaridad: {
        		minlength: 5,
        		required: true
        	},

        	descripcion: {
        		minlength: 5,
        		required: true
        	},

        	salario: {
        		required: true
        	},

        	horario: {
        		minlength: 5,
        		required: true
        	},

        	prestaciones: {
        		minlength: 5,
        		required: true
        	},

        	observaciones: {
        		minlength: 5,
        		required: true
        	}

        },

        messages: {
            nombre: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	empresa: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	domicilio: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	telefono: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	correo: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	vacante: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	cantidad: {
        		required: "Favor de llenar este campo"
        	},

        	genero: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	edad: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	escolaridad: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	descripcion: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	salario: {
        		required: "Favor de llenar este campo"
        	},

        	horario: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	prestaciones: {
        		minlength: "Favor de ingresar informacón completa",
        		required: "Favor de llenar este campo"
        	},

        	observaciones: {
        		minlength: "Favor de ingresar informacón completa",
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
                    	$('#modal_empresa').modal('hide');
                        swal({
                            title: "Guardado correctamente!",
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

	$('#form_trabajo').validate({
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
                	let datos = data.split(',');

                    if (datos[0]==='correcto'){
                    	$('#modal_trabajo').modal('hide');
                        swal({
                            title: "Guardado correctamente!",
                            text: "Se comunicarán contigo si alguna empresa está interesado en tu perfil.",
                            icon: "success",
                            button: "Aceptar"
                        }).then(function(){
                        	pagecontent('view/bolsa/bolsa.php');
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