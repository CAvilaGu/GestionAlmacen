<!-- Agregar una nueva entrada al Stock -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-10">
             	<h1>Nueva Orden de Despacho</h1>   
            </div>
        </div> 
        <div>
			<form class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle Lote</legend>
					<!-- Select Basic -->
					<div class="col-md-6 col-sm-12 col-xs-12">
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="#">Tipo de Lote</label>
						  <div class="col-md-7">
						    <select id="#" name="#" class="form-control">
						      <option value="MATERIA PRIMA">Materia Prima</option>
						      <option value="CONSUMIBLE">Consumible</option>
						      <option value="PRODUCTO TERMINADO">Producto Terminado</option>
						      <option value="MATERIAL SOBRANTE">Material Recuperable</option>
						      
						    </select>
						  </div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="fechaEntrada">Fecha Entrada</label>  
						  <div class="col-md-7">
						  	<input id="fecha"class="form-control input-md" type="date" name="fechaEntrada" step="1" min="01/01/2015"  value=<? date_default_timezone_set('America/Caracas'); echo '"'.date("Y-m-d").'"';?>>
						  </div>
						</div>
					</div>
				</fieldset>
			</form>

				<div>
					<div class="form-horizontal">
						<fieldset>
							<!-- Form Name -->
							<legend id="leyenda">Materia Prima</legend>
							<!-- Text input-->
							<div class="form-group">
								<label id="desc" class="col-md-4 control-label" for="nroguia">Nro. Guia Despacho</label>  
								<div class="col-md-4">
									<input id="nroDesc" name="nroDesc" placeholder="" class="form-control input-md" type="text"> 
								</div>
							</div>
							<div class="form-group" id="adicional">
	                            <label class="col-md-4 control-label" for="nroguia">Imagen</label>
	                            <div class="col-md-4">
	                            	<input id="imagen" type="file" id="archivo"/>
	                            </div>
	                        </div>

						</fieldset>
					</div>

				</div>

				<div id="detalleBulto" class="row">
					<fieldset>
							<!-- Form Name -->
							<legend style="text-align:center; text-color: black;"><h2>Detalle de Paquete</h2></legend>
							<div class="row col-md-1 col-md-offset-10" style="margin-left:88%">
                   				 <a  id="agregar" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>Agregar</a>
							</div>
							<br>
							<div class="form-group">
								<label class="col-md-3 control-label" for="nroguia">Material</label> 
								<label class="col-md-3 control-label" for="nroguia">Cant. Piezas</label>  
								<label class="col-md-3 control-label" for="nroguia">Cant. Paquetes</label>
 								<label class="col-md-3 control-label" for="nroguia">Volumen Total</label>							
							</div>
							<div class="col-md-3">
								<select class="form-control" id="producto0">
								</select> 
							</div>
							<div class="col-md-3">
								<input id="cPieza0" name="nroguia" placeholder="Cant. Piezas" class="form-control input-md" type="number">								
							</div>
							<div class="col-md-3">
								<input id="cPaquete0" name="nroguia" placeholder="Cant. Paquetes" class="form-control input-md" type="number">
							</div>
							<div class="col-md-3">
								<input id="volumen0" name="nroguia" placeholder="Volumen" class="form-control input-md" type="number">
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label" for="nroguia">Ancho Paquete</label> 
								<label class="col-md-3 control-label" for="nroguia">Alto Paquete</label>  
								<label class="col-md-3 control-label" for="nroguia">Largo Paquete</label>
 								<label class="col-md-3 control-label" for="nroguia">Unidad</label>							
							</div>
								<div class="col-md-3">
								<input id="ancho0" name="nroguia" placeholder="Ancho" class="form-control input-md" type="number">								
							</div>
							<div class="col-md-3">
								<input id="alto0" name="nroguia" placeholder="Alto" class="form-control input-md" type="number">
							</div>
							<div class="col-md-3">
								<input id="largo0" name="nroguia" placeholder="Largo" class="form-control input-md" type="number">
							</div>
								<div class="col-md-1" style="width:8.7em; padding:auto;">
								<select class="form-control" id="tipo" disabled>
									<option value="M" selected>Metros</option>
									<!-- BASE DATOS -->
								</select> 
							</div>

					</fieldset>
					
				</div>
				<br>
				<br>
				<button type="submit" class="btn btn-success col-md-1 col-md-offset-5" style="margin-right: 10px;">  Atras  </button>
				<button id="procesar" type="submit" class="btn btn-success col-md-1">Procesar</button>
			</form>
  		</div>
	</div>
</div>
<script src="assets/js/stock.js"></script>