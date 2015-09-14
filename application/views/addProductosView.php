<!-- Agregar Producto -->
<div id="page-wrapper" >
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1>Nuevo Producto</h1>   
			</div>
		</div>
		<!-- Area de trabajo -->
		<div>
			<form class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle Producto</legend>
					<!-- Formulario -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Código</label> 
							<div class="col-md-3">
								<input id="nroguia" name="nroguia" placeholder="Código del Producto " class="form-control input-md" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Descripción</label>  
							<div class="col-md-8">
								<input id="nroguia" name="nroguia" placeholder="Nombre Comercial del Producto" class="form-control input-md" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Tipo de Madera</label>  
							<div class="col-md-5">
								<select class="form-control">
									<option value="Pino">Pino</option>
									<option value="Roble">Roble</option>
									<option value="Cedro">Cedro</option>
								</select> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Calidad</label>  
							<div class="col-md-5">
								<select class="form-control">
									<option value="Primera">Primera</option>
									<option value="Segunda">Segunda</option>
									<option value="Tercera">Tercera</option>
								</select> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Dimensiones</label>  
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
									<option value="mm">mm</option>
									<option value="cm">cm</option>
									<option value="">Cedro</option>
								</select> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Inventario Optimo</label>  
							<div class="col-md-5">
								<input id="nroguia" name="nroguia" placeholder="1234" class="form-control input-md" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Tipo Producto</label>  
							<div class="col-md-5">
								<select class="form-control">
									<option value="Materia Prima">Materi Prima</option>
									<option value="Producto Termnado">Producto Termnado</option>
									<option value="Consumible">Consumible</option>
									<option value="Material Sobrante">Material Sobrante</option>
								</select> 
							</div>
						</div>
						<div id="composicion" class="form-group text-center" style="border-top: black 2px solid; margin: auto; padding-bottom: 26px">
							<div class="col-md-5 col-md-offset-1">
								<label>Producto</label>
								<select class="form-control">
									<option value="">Tabla</option>
								</select> 
							</div>
							<div class="col-md-5">
									<label>Cantidad</label>
									<input class="form-control" />
							</div>
							<div style=" padding-top: 26px">
					  			<a href=""><img src="assets/images/text-plus-icon.png"></a>
							</div>
														
						</div>
					</div>
				</fieldset>
				<a type="submit" class="btn btn-success col-md-1 col-md-offset-4" style="margin-right: 10px;" href="ListProductosController">  Atras  </a>
				<button type="submit" class="btn btn-success col-md-1" style="margin-right: 10px;">Guardar</button>
			</form>
		</div>
		<!-- Fin area trabajo -->
	</div>
</div>

