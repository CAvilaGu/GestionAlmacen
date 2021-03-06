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
			<form class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle Proveedor</legend>
					<!-- Formulario -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Código</label>  
					  		<div class="col-md-5">
					  			<input id="nroguia" name="nroguia" placeholder="Código del Proveedor " class="form-control input-md" type="text" disabled>
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">RIF</label>  
					  		<div class="col-md-5">
					  			<input id="nroguia" name="nroguia" placeholder="RIF del Proveedor " class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Nombre Comercial</label>  
					  		<div class="col-md-8">
					  			<input id="nroguia" name="nroguia" placeholder="Nombre Comercial del Proveedor" class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Nombe Fiscal</label>  
					  		<div class="col-md-8">
					  			<input id="nroguia" name="nroguia" placeholder="Nombre Fiscal del Proveedor" class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Dirección</label>  
					  		<div class="col-md-8">
								<textarea placeholder="Avenida | Manzana | Estado | Ciudad" class="form-control" rows="3"></textarea>
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Teléfono </label>  
					  		<div class="col-md-5">
					  			<input id="nroguia" name="nroguia" placeholder="Número de Teléfono" class="form-control input-md" type="text">
					  		</div>
					  		<div>
					  			<a href=""><img src="assets/images/text-plus-icon.png"></a>
							</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Correo Electrónico</label>  
					  		<div class="col-md-5">
					  			<input id="nroguia" name="nroguia" placeholder="Dirección de Correo Electrónico" class="form-control input-md" type="text">
					  		</div>
					  		<div>
					  			<a href=""><img src="assets/images/text-plus-icon.png"></a>
							</div>
						</div>
					</div>
				</fieldset>
				<a type="submit" class="btn btn-success col-md-1 col-md-offset-4" style="margin-right: 10px;" href="ListProveedoresController">  Atras  </a>
				<button type="submit" class="btn btn-success col-md-1" style="margin-right: 10px;">Guardar</button>
				<button type="submit" class="btn btn-success col-md-1" style="margin-right: 10px;">Eliminar</button>		
			</form>
  		</div>
  		<!-- Fin area trabajo -->
	</div>
</div>
