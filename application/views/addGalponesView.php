<!-- Agregar una nueva galpon-->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-10">
             	<h1>Agregar Nuevo Galpón</h1>   
            </div>
        </div> 
        <div>
			<form class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle del Galpón</legend>
					<!-- Select Basic -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group ">
						  <label class="col-md-2 control-label" for="proveedor">Ubicación</label>
						  <div class="col-md-8">
					  			<input id="nroguia" name="nroguia" placeholder="Ubicación Física" class="form-control input-md" type="text">
						  </div>
						</div>
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-2 control-label" for="tipoLote">Descripción</label>
						  <div class="col-md-8">
					 	 		<input id="nroguia" name="nroguia" placeholder="Descripción del Galpón" class="form-control input-md" type="text">
						  </div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label" for="nroguia">Dimensiones <br> Galpón</label>  
							<div class="col-md-2">
								<label>Ancho</label>
								<input class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Alto</label>
								<input class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Largo</label>
								<input class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Unidad</label>
								<select class="form-control">
									<option value="m">m</option>
									<option value="cm">cm</option>
									<option value="mm">mm</option>
								</select> 
							</div>
						</div>	
						<div class="form-group">
							<label class="col-md-2 control-label" for="nroguia">Dimensiones <br> Coordenada</label>  
							<div class="col-md-2">
								<label>Ancho</label>
								<input class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Alto</label>
								<input class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Largo</label>
								<input class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Unidad</label>
								<select class="form-control">
									<option value="m">m</option>
									<option value="cm">cm</option>
									<option value="mm">mm</option>
								</select> 
							</div>
						</div>	
					</div>
					<button type="submit" class="btn btn-success col-md-1 col-md-offset-5" style="margin-right: 10px;">  Limpiar  </button>
					<button type="submit" class="btn btn-success col-md-1">Procesar</button>

				</fieldset>
			</form>
				<div>
					<form class="form-horizontal">
						<fieldset>

						<!-- Form Name -->
						<legend>Materia Prima</legend>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="nroguia">Nro. Guia Despacho</label>  
						  <div class="col-md-4">
						  <input id="nroguia" name="nroguia" placeholder="Nro. de Guía" class="form-control input-md" type="text">
						    
						  </div>
						</div>

						</fieldset>
					</form>
				</div>
				<button type="submit" class="btn btn-success col-md-1 col-md-offset-5" style="margin-right: 10px;">  Atras  </button>
				<button type="submit" class="btn btn-success col-md-1">Guardar</button>
			</form>
  		</div>
	</div>
</div>
