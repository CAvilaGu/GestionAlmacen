<!-- AGREGAR PROVEEDOR -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             	<h1>Nuevo Proveedor</h1>   
            </div>
        </div>
         <!-- Area de trabajo -->
        <div>
			<div class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle Proveedor</legend>
					<!-- Formulario -->
					<div class="alert alert-danger" id="alertRif" style="display:none;"> 
					  <a href="#" onclick="ocultar('alertRif')" class="close">&times;</a>
					  <strong>Error! </strong>Inserta el <strong>RIF </strong> del proveedor
					</div>
					<div class="alert alert-danger" id="alertNombreC" style="display:none;">
					  <a href="#" onclick="ocultar('alertNombreC')" class="close">&times;</a>
					  <strong>Error! </strong>Inserta el <strong>Nombre comercial </strong> del proveedor
					</div>
					<div class="alert alert-danger" id="alertNombreF" style="display:none;">
					  <a href="#" onclick="ocultar('alertNombreF')" class="close">&times;</a>
					  <strong>Error! </strong>Inserta el <strong>Nombre fiscal </strong> del proveedor
					</div>
					<div class="alert alert-danger" id="alertDireccion" style="display:none;">
					  <a href="#" onclick="ocultar('alertDireccion')" class="close">&times;</a>
					  <strong>Error! </strong>Inserta la <strong>Direccion </strong> del proveedor
					</div>
					<div class="alert alert-danger" id="alertTelefono" style="display:none;">
					 <a href="#" onclick="ocultar('alertTelefono')" class="close">&times;</a>
					  <strong>Error! </strong>Inserta  <strong>al menos UN telefono</strong> del proveedor
					</div>
					<div class="alert alert-danger" id="alertMail" style="display:none;">
					  <a href="#" onclick="ocultar('alertMail')" class="close">&times;</a>
					  <strong>Error! </strong>Inserta  <strong>al menos UN correo electronico</strong> del proveedor
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">

						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">RIF</label>  
					  		<div class="col-md-5">
					  			<input id="rif" name="nroguia" placeholder="RIF del Proveedor " class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Nombre Comercial</label>  
					  		<div class="col-md-8">
					  			<input id="nombreC" name="nroguia" placeholder="Nombre Comercial del Proveedor" class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Nombe Fiscal</label>  
					  		<div class="col-md-8">
					  			<input id="nombreF" name="nroguia" placeholder="Nombre Fiscal del Proveedor" class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Dirección</label>  
					  		<div class="col-md-8">
								<textarea id="direccion" placeholder="Avenida | Manzana | Estado | Ciudad" class="form-control" rows="3"></textarea>
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Teléfono </label>  
					  		<div class="col-md-5" id="telefono">
					  			<input id="tlf0" name="tlf0" placeholder="Número de Teléfono" class="form-control input-md" type="text">
					  			<br>  			
					  		</div>
					  		<div>
					  			<a id="clcTlf"><img src="assets/images/text-plus-icon.png"></a>
							</div>						
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Correo Electrónico</label>  
					  		<div class="col-md-5" id="correo">
					  			<input id="mail0" name="mail" placeholder="Dirección de Correo Electrónico" class="form-control input-md" type="text">
					  			<br>  	
					  		</div>
					  		<div>
					  			<a id="clcMail"><img src="assets/images/text-plus-icon.png"></a>
							</div>
						</div>
					</div>
				</fieldset>
				<a type="submit" class="btn btn-success col-md-1 col-md-offset-4" style="margin-right: 10px;" href="ListProveedoresController">  Atras  </a>
				<button id="agregar" type="submit" class="btn btn-success col-md-1">Agregar</button>
			</div>
  		</div>
  		<!-- Fin area trabajo -->
	</div>
</div>
<div id="codigoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Desea eliminar el numero de telefono?</h4>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script src="assets/js/proveedores.js"></script>