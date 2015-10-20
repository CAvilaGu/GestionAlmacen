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
			<div class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle Cliente</legend>
					<!-- Formulario -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Código</label> 
					  		
					  		<div class="col-md-3">
					  			<input id="codigo" name="nroguia" placeholder=<? echo($clientes->idCliente) ?> class="form-control input-md" type="text" disabled>
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Nombre</label>  
					  		<div class="col-md-8">
					  			<input id="nombre" name="nroguia" placeholder="Nombre del Cliente" class="form-control input-md" type="text" value=<? echo($clientes->nombre) ?>>
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Dirección</label>  
					  		<div class="col-md-8">
								<textarea id="direccion"placeholder="Avenida | Manzana | Estado | Ciudad" class="form-control"rows="3"><? echo($clientes->direccion) ?></textarea>
					  		</div>
						</div>
							<div class="form-group">
								<?
									if (!empty($telefonos)) {
				    					foreach ($telefonos->result() as $telefono) {
					    		?>
						  		<label class="col-md-3 control-label" for="nroguia">Teléfono </label>  
						  		<div class="col-md-7">
						  			<input id="nroguia" name="nroguia" placeholder="Número de Teléfono" value=<? echo '"'.$telefono->nroTelefonoCliente.'"'; ?> class="form-control input-md" type="text" disabled>
						  		</div>
						  		<div>
						  			<a onclick=<? echo "eliminarTelefono('$telefono->nroTelefonoCliente')";?>><img src="../assets/images/text-menos-icon.png"> </a>
								</div>
								<br>
						  		<?
				  						}
				  					}
						  		?>
						  	</div>
					  		<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Teléfono </label>  
					  		<div class="col-md-5" id="telefono">
					  			<input id="tlf0" name="tlf0" placeholder="Número de Teléfono" class="form-control input-md" type="text">
					  			<br>  			
					  		</div>
					  		<div>
					  			<a id="clcTlf"><img src="../assets/images/text-plus-icon.png"></a>
							</div>						
						</div>
						


						<div class="form-group">
							<?
									if (!empty($correos)) {
					    					foreach ($correos->result() as $correo) {
						    		?>
					  		<label class="col-md-3 control-label" for="nroguia">Correo Electrónico</label>  
					  		<div class="col-md-7">
					  			<input id="nroguia" name="nroguia" placeholder="Dirección de Correo Electrónico" value=<? echo '"'.$correo->dirCorreoCliente.'"'; ?> class="form-control input-md" type="text" disabled>
					  		</div>
					  		
							<div>
								<a onclick=<? echo "eliminarMail('$correo->dirCorreoCliente')";?>><img src="../assets/images/text-menos-icon.png"> </a>
								
					  			
							</div>
				  			<br>

					  		<?
					  				}
					  			}
					  		?>
					  	</div>
					  	<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Correo Electrónico</label>  
					  		<div class="col-md-5" id="correo">
					  			<input id="mail0" name="mail" placeholder="Dirección de Correo Electrónico" class="form-control input-md" type="text">
					  			<br>  	
					  		</div>
					  		<div>
					  			<a id="clcMail"><img src="../assets/images/text-plus-icon.png"></a>
							</div>
						</div>
						
					</div>
				</fieldset>
				<a type="submit" class="btn btn-success col-md-1 col-md-offset-4" style="margin-right: 10px;" href="ListClientesController">  Atras  </a>
				<button id="guardar" type="submit" class="btn btn-success col-md-1" style="margin-right: 10px;">Guardar</button>
				<button type="submit" class="btn btn-success col-md-1" style="margin-right: 10px;">Eliminar</button>		
			</div>
  		</div>
  		<!-- Fin area trabajo -->
	</div>
</div>
<!-- Button trigger modal -->


<div id="modalPhone" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Desea eliminar el numero de telefono?</h4>
      </div>

      <div class="modal-footer">
      	<button type="button" class="btn btn-danger" id="eliminarTelefono">Eliminar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="modalMail" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Desea eliminar el correo?</h4>
      </div>

      <div class="modal-footer">
      	 <button type="button" class="btn btn-danger" id="eliminarMail">Eliminar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>
<script src="../assets/js/editClientes.js"></script>
<script type="text/javascript">
codigo=<? echo "'".$clientes->idCliente."'";?>;
</script>