<div class="modal fade" id="modal_postularme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<div class="modal-title">
      		<h5 style="color: black; font-weight: bolder;">!Regístrate</h5>
      		<h4 style="margin-left: 1em; color: grey;">te estamos buscando!</h4>
      		<h2 style="margin-left: 2em; color: grey;"><b><?= $_POST['vacante'];?></b> en <?= $_POST['empresa'];?></h2>
      	</div>
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="form_postular" name="form_postular" method="post">
        	<input type="hidden" name="id_empresa" id="id_empresa" value="<?=$_POST['id'];?>">

        	<input type="hidden" name="nombre_empresa" id="nombre_empresa" value="<?=$_POST['empresa'];?>">

        	<input type="hidden" name="nombre_vacante" id="nombre_vacante" value="<?=$_POST['vacante'];?>">

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
        <button type="submit" form="form_postular" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Guardar</button>
      </div>
    </div>
  </div>
</div>