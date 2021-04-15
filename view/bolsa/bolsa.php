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
        <form>
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
		    </div>
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
        <form>
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
		    </div>
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>