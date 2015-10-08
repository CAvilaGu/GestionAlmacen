<!-- Editar cliente -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             	<h1>Editar Cliente</h1>   
            </div>
        </div>
         <!-- Area de trabajo -->
        <div>
			<form class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle Cliente</legend>
					<!-- Formulario -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Código</label> 
					  		
					  		<div class="col-md-3">
					  			<input id="disabledInput" name="nroguia" placeholder=<? echo($clientes->idCliente) ?> class="form-control input-md" type="text" disabled>
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Nombre</label>  
					  		<div class="col-md-8">
					  			<input id="nroguia" name="nroguia" placeholder="Nombre del Cliente" class="form-control input-md" type="text" value=<? echo($clientes->nombre) ?>>
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Dirección</label>  
					  		<div class="col-md-8">
								<textarea placeholder="Avenida | Manzana | Estado | Ciudad" class="form-control"rows="3"><? echo($clientes->direccion) ?></textarea>
					  		</div>
						</div>
						<div class="form-group">
							<?
									if (!empty($telefonos)) {
					    					foreach ($telefonos->result() as $telefono) {
						    		?>
					  		<label class="col-md-3 control-label" for="nroguia">Teléfono </label>  
					  		<div class="col-md-5">
					  			<input id="nroguia" name="nroguia" placeholder="Número de Teléfono" value=<? echo '"'.$telefono->nroTelefonoCliente.'"'; ?> class="form-control input-md" type="text">
					  		</div>
					  		<?

					  						}
					  					}
					  		?>
					  		<div>
					  			<img src="../assets/images/text-plus-icon.png">
							</div>
						</div>


						<div class="form-group">
							<?
									if (!empty($correos)) {
					    					foreach ($correos->result() as $correo) {
						    		?>
					  		<label class="col-md-3 control-label" for="nroguia">Correo Electrónico</label>  
					  		<div class="col-md-5">
					  			<input id="nroguia" name="nroguia" placeholder="Dirección de Correo Electrónico" value=<? echo '"'.$correo->dirCorreoCliente.'"'; ?> class="form-control input-md" type="text">
					  		</div>
					  		<div class="col-md-4">
								<div>
						  			<img src="../assets/images/text-plus-icon.png">
								</div>
					  		</div>

					  		<?
					  				}
					  			}
					  		?>
					  		
						</div>
					</div>
				</fieldset>
				<a type="submit" class="btn btn-success col-md-1 col-md-offset-4" style="margin-right: 10px;" href="ListClientesController">  Atras  </a>
				<button type="submit" class="btn btn-success col-md-1" style="margin-right: 10px;">Guardar</button>
				<button type="submit" class="btn btn-success col-md-1" style="margin-right: 10px;">Eliminar</button>		
			</form>
  		</div>
  		<!-- Fin area trabajo -->
	</div>
</div>
