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
								<input id="nroguia" name="nroguia" placeholder="Descripción del Producto" class="form-control input-md" type="text">
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
								<select class="form-control" style="text-align: center; font-size: medium;">
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
						<!-- ESTA OPCION SE DESPLIEGA JUNTO CON EL TIPO DE PRODUCTO = PRODUCTO TERMINADO -->
						<div class="form-group">
							<div class="radio col-md-2 col-md-offset-3">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />Compuesto
                                </label>
                            </div>
                            <div class="radio col-md-2">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>Derivado
                                </label>
                            </div>
						</div>
						<!-- /////////////////////////////////////////////////////////////////////////// -->
						<!-- ESTE FORMULARIO APARECE SI OPCION ELEGIDA ES = COMPUESTO -->
						<div id="composicion" class="form-group text-center" style="border-top: black 2px solid; margin: auto; padding-bottom: 26px">
							<div class="col-md-5 col-md-offset-2">
								<label>Producto</label>
								<select class="form-control">
									<option value="">Tabla</option>
								</select> 
							</div>
							<div class="col-md-3">
									<label>Cantidad</label>
									<input class="form-control" />
							</div>
							<div style=" padding-top: 26px; padding-right:84px">
					  			<a href=""><img src="assets/images/text-plus-icon.png"></a>
							</div>									
						</div>
						<!-- /////////////////////////////////////////////////////////////////////////// -->
						<!-- ESTE FORMULARIO APARECE SI OPCION ELEGIDA ES = COMPUESTO -->
						<div id="composicion" class="form-group text-center" style="border-top: black 2px solid; margin: auto; padding-bottom: 26px">
							<div class="col-md-1 col-md-offset-2">
								<label for="disabledSelect">Cantidad</label>
					  			<input  style="width: 55px" id="disabledInput" name="nroguia" placeholder="1" class="form-control input-md" type="text" disabled>

							</div>
							<div class="col-md-5">
								<label>Producto</label>
								<select class="form-control">
									<option value="">Tabla</option>
								</select> 
							</div>
							<div class="col-md-3">
									<label>Cantidad Derivada</label>
									<input class="form-control" />
							</div>								
						</div>
						<!-- /////////////////////////////////////////////////////////////////////////// -->
					</div>
				</fieldset>
				<a type="submit" class="btn btn-success col-md-1 col-md-offset-5" style="margin-right: 10px;" href="ListProductosController">  Atras  </a>
				<button type="submit" class="btn btn-success col-md-1" style="margin-right: 10px;">Guardar</button>
			</form>
		</div>
		<!-- Fin area trabajo -->
	</div>
</div>

