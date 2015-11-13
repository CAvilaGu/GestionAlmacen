<!-- Agregar una nueva galpon-->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-10">
             	<h1>Agregar Nuevo Galpón</h1>   
            </div>
        </div> 
        <div>
			<div class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle del Galpón</legend>
					<!-- Select Basic -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group ">
						  <label class="col-md-2 control-label" for="proveedor">Ubicación</label>
						  <div class="col-md-8">
					  			<input id="ubicacion" name="nroguia" placeholder="Ubicación Física" class="form-control input-md" type="text">
						  </div>
						</div>
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-2 control-label" for="tipoLote">Descripción</label>
						  <div class="col-md-8">
					 	 		<input id="descripcion" name="nroguia" placeholder="Descripción del Galpón" class="form-control input-md" type="text">
						  </div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label" for="nroguia">Dimensiones <br> Galpón</label>  
							<div class="col-md-2">
								<label>Ancho</label>
								<input id="anchoGalpon"class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Alto</label>
								<input id="altoGalpon" class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Largo</label>
								<input id="largoGalpon" class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Unidad</label>
								<select id="unidad" disabled class="form-control" style="text-align: center; font-size: medium;">
									<option value="mm">mm</option>
									<option value="cm">cm</option>
									<option value="m" selected>metro</option>
								</select> 
							</div>
						</div>	
						<div class="form-group">
							<label class="col-md-2 control-label" for="nroguia">Dimensiones <br> Coordenada</label>  
							<div class="col-md-2">
								<label>Ancho</label>
								<input id='anchoCoor'class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Alto</label>
								<input  id="altoCoor" class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Largo</label>
								<input id="largoCoor"class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Unidad</label>
								<select id="unidad" disabled class="form-control" style="text-align: center; font-size: medium;">
									<option value="mm">mm</option>
									<option value="cm">cm</option>
									<option value="m" selected>metro</option>
								</select> 
							</div>
						</div>	
					</div>
					<button type="submit" class="btn btn-success col-md-2 col-md-offset-4" style="margin-right: 10px;">  Limpiar  </button>
					<button id="procesar" type="submit" class="btn btn-success col-md-2">Procesar</button>

				</fieldset>
			</div>
				<div>
					<form class="form-horizontal">
						<fieldset>

						<!-- Form Name -->
						<legend>Distribución del Galpón</legend>

						<!-- Text input-->
						<div class="row">
							<div id="galpon" class="col-md-offset-2" >
							</div>
						</div>
						<br>
						</fieldset>
					</form>
				</div>
				<a type="submit" class="btn btn-success col-md-2 col-md-offset-4" style="margin-right: 10px; text-aling:center;" href="ListGalponesController">  Atras  </a>
				<button id="guardar"type="submit" class="btn btn-success col-md-2" style="text-aling:center;">Guardar</button>
  		</div>
	</div>
</div>
<script src="assets/js/galpones.js"></script>