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
			<div class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle Cliente</legend>
					<!-- Formulario -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Código</label> 
					  		<div class="col-md-2">
					  			<select class="form-control" id="tipo">
					  				<option value="V">V</option>
					  				<option value="V">E</option>
						      		<option value="J">J</option>
					  			</select> 
					  		</div>
					  		<div class="col-md-3">
					  			<input id="codigo" name="codigo" placeholder="Código del Cliente " class="form-control input-md" type="text">
					  		</div>
						</div>
						<div class="form-group">
					  		<label class="col-md-3 control-label" for="nroguia">Nombre</label>  
					  		<div class="col-md-8">
					  			<input id="nombre" name="nombre" placeholder="Nombre del Cliente" class="form-control input-md" type="text">
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
				<a type="submit" class="btn btn-success col-md-1 col-md-offset-5" style="margin-right: 10px;" href="ListClientesController">  Atras  </a>
				<button type="submit" id="agregar" class="btn btn-success col-md-1">Agregar</button>
			</div>
  		</div>
  		<!-- Fin area trabajo -->
	</div>
</div>
<script src="assets/js/jquery-1.10.2.js"></script>

<script src="assets/js/addClientes.js"></script>