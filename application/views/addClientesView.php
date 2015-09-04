<!-- Agregar cliente -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             	<h1>Nuevo Cliente</h1>   
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
					  		<div class="col-md-2">
					  			<select class="form-control">
					  				<option value="V">V</option>
						      		<option value="J">J</option>
					  			</select> 
					  		</div>
					  		<div class="col-md-3">
					  			<input id="nroguia" name="nroguia" placeholder="Código del Cliente " class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Nombre</label>  
					  		<div class="col-md-8">
					  			<input id="nroguia" name="nroguia" placeholder="Nombre Comercial del Cliente" class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Dirección</label>  
					  		<div class="col-md-8">
								<textarea class="form-control" rows="3"></textarea>
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Teléfono </label>  
					  		<div class="col-md-5">
					  			<input id="nroguia" name="nroguia" placeholder="Número de Teléfono" class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Teléfono</label>  
					  		<div class="col-md-5">
					  			<input id="nroguia" name="nroguia" placeholder="Número de Teléfono" class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Teléfono</label>  
					  		<div class="col-md-5">
					  			<input id="nroguia" name="nroguia" placeholder="Número de Teléfono" class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Correo Electrónico</label>  
					  		<div class="col-md-8">
					  			<input id="nroguia" name="nroguia" placeholder="Dirección de Correo Electrónico" class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Correo Electrónico</label>  
					  		<div class="col-md-8">
					  			<input id="nroguia" name="nroguia" placeholder="Dirección de Correo Electrónico" class="form-control input-md" type="text">
					  		</div>
						</div>
					</div>
				</fieldset>
				<a type="submit" class="btn btn-success col-md-1 col-md-offset-5" style="margin-right: 10px;" href="ListClientesController">  Atras  </a>
				<button type="submit" class="btn btn-success col-md-1">Procesar</button>
			</form>
  		</div>
  		<!-- Fin area trabajo -->
	</div>
</div>
