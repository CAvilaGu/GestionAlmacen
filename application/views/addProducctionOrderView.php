<!-- Agregar orden de producción -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             	<h1>Nueva Orden de Producción</h1>   
            </div>
        </div> 
        <div>
			<form class="form-horizontal">
				<fieldset>
					<!-- Form Name -->
					<legend>Detalle Orde Produccion</legend>
					<!-- Select Basic -->
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group ">
						  <label class="col-md-4 control-label" for="proveedor">Proceso</label>
						  <div class="col-md-7">
						    <select id="proveedor" name="proveedor" class="form-control">
						      <option value="1">Option one</option>
						      <option value="2">Option two</option>
						    </select>
						  </div>
						</div>
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="tipoLote">Cantidad</label>
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
						  <label class="col-md-4 control-label" for="almacen">Estado</label>
						  <div class="col-md-7">
						    <select id="almacen" name="almacen" class="form-control">
						      <option value="1">Option one</option>
						      <option value="2">Option two</option>
						    </select>
						  </div>
						</div>
					</div>
				</fieldset>
			</form>
				<div class="row" id="areaPariedad">
					<div class="col-md-6">
						<!-- Colunma #1 -->
						<div class="chat-panel panel panel-default chat-boder chat-panel-head" >
							<div class="panel-heading">
								<i class="fa fa-anchor fa-fw"></i> Lote x Producto
							</div>
							  	<table class="table table-striped">
								    <thead>
								      <tr>
								        <th>Firstname</th>
								        <th>Lastname</th>
								        <th>Email</th>
								      </tr>
								    </thead>
								    <tbody>
								      <tr>
								        <td>John</td>
								        <td>Doe</td>
								        <td>john@example.com</td>
								      </tr>
								    </tbody>
							  		</table>
							</div>
					</div>

					<div class="col-md-6">
						<!-- Colunma #2 -->
						<div class="chat-panel panel panel-default chat-boder chat-panel-head" >
							<div class="panel-heading">
								<i class="fa fa-anchor fa-fw"></i> Lote x Producto
							</div>
							  	<table class="table table-striped">
								    <thead>
								      <tr>
								        <th>Firstname</th>
								        <th>Lastname</th>
								        <th>Email</th>
								      </tr>
								    </thead>
								    <tbody>
								      <tr>
								        <td>John</td>
								        <td>Doe</td>
								        <td>john@example.com</td>
								      </tr>
								    </tbody>
							  		</table>
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
