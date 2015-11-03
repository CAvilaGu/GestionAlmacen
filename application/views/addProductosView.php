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
			<div class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle Producto</legend>
					<!-- Formulario -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Código</label> 
							<div class="col-md-3">
								<input id="codigo" name="nroguia" placeholder="Código del Producto " class="form-control input-md" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Descripción</label>  
							<div class="col-md-8">
								<input id="descripcion" name="nroguia" placeholder="Descripción del Producto" class="form-control input-md" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Tipo de Madera</label>  
							<div class="col-md-5">
								<select class="form-control" id="tipo">
									<option value="Pino">Pino</option>
									<option value="Roble">Roble</option>
									<option value="Cedro">Cedro</option>
								</select> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Calidad</label>  
							<div class="col-md-5">
								<select class="form-control" id="calidad">
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
								<input id="ancho" class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Alto</label>
								<input id="alto"class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Largo</label>
								<input id="largo" class="form-control" />
							</div>
							<div class="col-md-2">
								<label>Unidad</label>
								<select id="unidad"  class="form-control" style="text-align: center; font-size: medium;" disabled>
									<option value="mm">mm</option>
									<option value="cm">cm</option>
									<option value="m" selected>metro</option>
								</select> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Inventario Optimo</label>  
							<div class="col-md-5">
								<input id="optimo" name="nroguia" placeholder="1234" class="form-control input-md" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="nroguia">Tipo Producto</label>  
							<div class="col-md-5">
								<select class="form-control" id="tipo_producto">
									<option value="1">Materia Prima</option>
									<option value="2">Producto Terminado</option>
									<option value="3">Consumible</option>
									<option value="4">Material Sobrante</option>
								</select> 
							</div>
						</div>
						<!-- ESTA OPCION SE DESPLIEGA JUNTO CON EL TIPO DE PRODUCTO = PRODUCTO TERMINADO -->
						<div id="origen" style="display:none;">
							<form class="form-group" id="formulario">
								<div class="radio col-md-2 col-md-offset-3">
	                                <label>
	                                    <input type="radio" name="optOrigen"  value="1" checked />Compuesto
	                                </label>
	                            </div>
	                            <div class="radio col-md-2">
	                                <label>
	                                    <input type="radio" name="optOrigen"  value="2"/>Derivado
	                                </label>
	                            </div>
							</form>

							<!-- /////////////////////////////////////////////////////////////////////////// -->
							<!-- ESTE FORMULARIO APARECE SI OPCION ELEGIDA ES = COMPUESTO -->
							<div id="composicion" class="form-group text-center" style="border-top: black 2px solid; margin: auto; padding-bottom: 26px; display:none">
								<div class="col-md-5 col-md-offset-2">
									<label>Producto</label>
									<select id="productoC0" class="form-control">
									</select> 
								</div>
								<div class="col-md-3">
										<label>Cantidad</label>
										<input type='number'id='cantidadC0' class="form-control" />
								</div>
								<div style=" padding-top: 26px; padding-right:84px">
						  			<a id="mas"><img src="assets/images/text-plus-icon.png"></a>
								</div>	
								<br>
							</div>
							<!-- /////////////////////////////////////////////////////////////////////////// -->
							<!-- ESTE FORMULARIO APARECE SI OPCION ELEGIDA ES = Derivado -->
							<div id="derivacion" class="form-group text-center" style="border-top: black 2px solid; margin: auto; padding-bottom: 26px; display:none">
								<div class="col-md-1 col-md-offset-2">
									<label for="disabledSelect">Cantidad</label>
						  			<input  style="width: 55px" id="disabledInput" name="nroguia" placeholder="1" class="form-control input-md" type="text" disabled>

								</div>
								<div class="col-md-5">
									<label>Producto</label>
									<select id="producto2" class="form-control">
										
									</select> 
								</div>
								<div class="col-md-3">
										<label>Cantidad Derivada</label>
										<input id="cantidad2"class="form-control" />
								</div>								
							</div>
						</div>
						<!-- /////////////////////////////////////////////////////////////////////////// -->
					</div>
				</fieldset>
				<a type="submit" class="btn btn-success col-md-1 col-md-offset-5" style="margin-right: 10px;" href="ListProductosController">  Atras  </a>
				<button type="submit" class="btn btn-success col-md-1" style="margin-right: 10px;" id="guardar">Guardar</button>
			</div>
		</div>
		<!-- Fin area trabajo -->
	</div>
</div>
<script src="assets/js/productos.js"></script>