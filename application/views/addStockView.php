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
						    </select>
						  </div>
						</div>
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="tipoLote">Tipo de Lote</label>
						  <div class="col-md-7">
						    <select id="tipoLote" name="tipoLote" class="form-control">
						      <option value="1">Option one</option>
						      <option value="2">Option two</option>
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
						    </select>
						  </div>
						</div>
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="fechaEntrada">Fecha Entrada</label>  
						  <div class="col-md-7">
						  	<input id="fechaEntrada" name="fechaEntrada" placeholder="placeholder" class="form-control input-md" type="text">
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

						</fieldset>
					</form>
				</div>
				<div>
					<form class="form-horizontal">
					<fieldset>

					<!-- Form Name -->
					<legend>Producto terminado</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nroguia">Nro. Orden</label>  
					  <div class="col-md-4">
					  <input id="nroguia" name="nroguia" placeholder="Nro. Orden" class="form-control input-md" type="text">
					    
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
						</fieldset>
					</form>
				</div>	

				<div class="row" id="areaPariedad">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="chat-panel panel panel-default chat-boder chat-panel-head" >
							<div class="panel-heading">
								<i class="fa fa-comments fa-fw"></i>
								Lote x Producto
							</div>
							<li>1</li>
							<li>2</li>
							
						</div>
					</div>

					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="chat-panel panel panel-default chat-boder chat-panel-head" >
							<div class="panel-heading">
								<i class="fa fa-comments fa-fw"></i>
								Bulto x Producto
							</div>
							<li>3</li>
							<li>4</li>
						</div>
					</div>
				</div>
				</fieldset>
				<button type="submit" class="btn btn-success col-md-1 col-md-offset-5" style="margin-right: 10px;">  Atras  </button>
				<button type="submit" class="btn btn-success col-md-1">Procesar</button>
			</form>
  		</div>
	</div>
</div>
