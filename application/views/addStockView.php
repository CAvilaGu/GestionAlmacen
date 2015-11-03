<!-- Agregar una nueva entrada al Stock -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-10">
             	<h1>Entrada de Material</h1>   
            </div>
        </div> 
        <div>
			<form class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle Lote</legend>
					<!-- Select Basic -->
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group ">
						  <label class="col-md-4 control-label" for="proveedor">Proveedor</label>
						  <div class="col-md-7">
						    <select id="proveedor" name="proveedor" class="form-control">
						      <option value="1">Option one</option>
						      <option value="2">Option two</option>
						      <!-- BASE DE DATOS  -->
						    </select>
						  </div>
						</div>
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="tipoLote">Tipo de Lote</label>
						  <div class="col-md-7">
						    <select id="tipoLote" name="tipoLote" class="form-control">
						      <option value="NULL">Seleccione Tipo de Lote</option>
						      <option value="MATERIA PRIMA">Materia Prima</option>
						      <option value="CONSUMIBLE">Consumible</option>
						      <option value="PRODUCTO TERMINADO">Producto Terminado</option>
						      <option value="MATERIAL RECUPERABLE">Material Recuperable</option>
						      
						    </select>
						  </div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="almacen">Almacen</label>
						  <div class="col-md-7">
						    <select id="almacen" name="almacen" class="form-control">
						      <option value="1">Option one</option>
						      <option value="2">Option two</option>
						      <!-- BASE DE DATOS -->
						    </select>
						  </div>
						</div>
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="fechaEntrada">Fecha Entrada</label>  
						  <div class="col-md-7">
						  	<input class="form-control input-md" type="date" name="fechaEntrada" step="1" min="01/01/2015"  value="<? date_default_timezone_set('America/Caracas'); echo date("d/m/Y");?>">
						  </div>
						</div>
					</div>
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
						<div class="form-group">
                            <label class="col-md-4 control-label" for="nroguia">File input</label>
                            <div class="col-md-4">
                            	<input type="file" />
                            </div>
                        </div>

						</fieldset>
					</form>
				</div>
				<div>
					<form class="form-horizontal">
						<fieldset>
							<!-- Form Name -->
							<legend>Consumible</legend>
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="nroguia">Nro. Factura</label>  
							  <div class="col-md-4">
							  		<input id="nroguia" name="nroguia" placeholder="Nro. de Factura" class="form-control input-md" type="text">
							  </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nroguia">File input</label>
                            <div class="col-md-4">
                            	<input type="file" />
                            </div>
                       		 </div>
							
						</fieldset>
					</form>
				</div>	

				<div>
					<form class="form-horizontal">
					<fieldset>

					<!-- Form Name -->
					<legend>Producto Terminado</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nroguia">Nro. Orden</label>  
					  <div class="col-md-4">
					  <input id="nroguia" name="nroguia" placeholder="Nro. Orden" class="form-control input-md" type="text">
					    
					  </div>
					</div>
					<div class="form-group">
                            <label class="col-md-4 control-label" for="nroguia">File input</label>
                            <div class="col-md-4">
                            	<input type="file" />
                            </div>
                    </div>
					</fieldset>
					</form>
				</div>
				<div>
					<form class="form-horizontal">
						<fieldset>
							<!-- Form Name -->
							<legend>Material Recuperado</legend>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="nroguia">Proceso Productivo</label>  
							  <div class="col-md-4">
							  	<input id="nroguia" name="nroguia" placeholder="Nombre Proceso" class="form-control input-md" type="text">
							    
							  </div>
							</div>
						</fieldset>
					</form>

				</div>

				<div id="detalleBulto" class="row">
					<fieldset>
							<!-- Form Name -->
							<legend style="text-align:center; text-color: black;"><h2>Detalle de Paquete</h2></legend>
							<div class="form-group">
								<label class="col-md-3 control-label" for="nroguia">Material</label> 
								<label class="col-md-3 control-label" for="nroguia">Cant. Piezas</label>  
								<label class="col-md-3 control-label" for="nroguia">Cant. Paquetes</label>
 								<label class="col-md-3 control-label" for="nroguia">Volumen Total</label>							
							</div>
							<div class="col-md-3">
								<select class="form-control" id="tipo">
									<option value="Pino">Tabla Pino 12x12x3.66</option>
									<option value="Roble">Roble</option>
									<option value="Cedro">Cedro</option>
									<!-- BASE DATOS -->
								</select> 
							</div>
							<div class="col-md-3">
								<input id="nroguia" name="nroguia" placeholder="Nro. Orden" class="form-control input-md" type="text">								
							</div>
							<div class="col-md-3">
								<input id="nroguia" name="nroguia" placeholder="Nro. Orden" class="form-control input-md" type="text">
							</div>
							<div class="col-md-3">
								<input id="nroguia" name="nroguia" placeholder="Nro. Orden" class="form-control input-md" type="text">
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label" for="nroguia">Ancho Paquete</label> 
								<label class="col-md-3 control-label" for="nroguia">Alto Paquete</label>  
								<label class="col-md-3 control-label" for="nroguia">Largo Paquete</label>
 								<label class="col-md-3 control-label" for="nroguia">Unidad</label>							
							</div>
								<div class="col-md-3">
								<input id="nroguia" name="nroguia" placeholder="Nro. Orden" class="form-control input-md" type="text">								
							</div>
							<div class="col-md-3">
								<input id="nroguia" name="nroguia" placeholder="Nro. Orden" class="form-control input-md" type="text">
							</div>
							<div class="col-md-3">
								<input id="nroguia" name="nroguia" placeholder="Nro. Orden" class="form-control input-md" type="text">
							</div>
								<div class="col-md-1" style="width:8.7em; padding:auto;">
								<select class="form-control" id="tipo" disabled>
									<option value="M" selected>Metros</option>
									<!-- BASE DATOS -->
								</select> 
							</div>
							<div class="col-md-1" style="width:8em; padding:auto;">
					  			<a id=""><img src="assets/images/text-plus-icon.png"></a>&nbsp;
					  			<a id=""><img src="assets/images/text-menos-icon.png"></a>
							</div>	
					</fieldset>
				</div>
				<br>
				<br>
				<button type="submit" class="btn btn-success col-md-1 col-md-offset-5" style="margin-right: 10px;">  Atras  </button>
				<button type="submit" class="btn btn-success col-md-1">Procesar</button>
			</form>
  		</div>
	</div>
</div>
