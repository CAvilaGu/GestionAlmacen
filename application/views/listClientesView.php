<!-- Lista de Clientes -->
<div id="page-wrapper" >
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12 radio">
				<h1>Listado de Clientes</h1>   
			</div>
		</div> 
		<div class="row">
			<div class="col-md-12"> <!-- Area de trabajo central -->
				<div class="panel panel-default"> <!-- Titulo de la tabla -->
					<div class="panel-heading"> 
						<a href="AddClientesController" class="btn btn-success col-md-offset-10">
							<i class="fa fa-plus"></i>Agregar
						</a> 
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<div role="grid" class="dataTables_wrapper form-inline" id="dataTables-example_wrapper">
								<div class="row"> <!-- Cabecera de la tabla -->
									<div class="col-sm-7">
										<div class="dataTables_length" id="dataTables-example_length">
											<label>
											</label>
										</div>
									</div>
									<div class="col-sm-5">
										<div id="dataTables-example_filter" class="dataTables_filter">
										</div>
									</div>
								</div>
								<table id="dataTables-example" class="table table-striped table-hover dataTable no-footer" aria-describedby="dataTables-example_info"> <!-- table-bordered para hacer los bordes visibles -->
									<thead>
										<tr role="row">
											<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column ascending">ID</th>
											<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-sort="ascending" aria-label="Browser: activate to sort column ascending">Nombre</th>
											<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="Platform(s): activate to sort column ascending">Dirección</th>
											<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="Engine version: activate to sort column ascending">Teléfono</th>
											<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-label="CSS grade: activate to sort column ascending">Correo</th>
											<th style="width: 92px;"></th>
										</tr>
									</thead>
									<tbody>
									<?
									if (!empty($clientes)) {
					    					foreach ($clientes->result() as $cliente) {
						    		?>
										<tr class="gradeA odd">
											<td class="sorting_1"> <?=$cliente->idCliente; ?> </td>
											<td class="center"> <?=$cliente->nombre; ?></td>
											<td class="center"> <?=$cliente->direccion; ?></td>
											<td class="center"> <?=$cliente->nroTelefonoCliente; ?></td>
											<td class="center"> <?=$cliente->dirCorreoCliente; ?></td>
											<td style="text-align: center" class="center">
												<div class="btn-group"> <!-- Botones de edicion x registro -->
													<a href="#"><i class="fa fa fa-eye fa-lg" data-toggle="modal" data-target="#myModal<?=$cliente->idCliente; ?>"></i></a>&nbsp;&nbsp;
  													<a href= <?='"EditClientesController/'.$cliente->idCliente.'"'?>><i class="fa fa-pencil fa-lg"></i></a> &nbsp;&nbsp;&nbsp;|
  													<a href= <?='"EliminarClientesController/cliente/'.$cliente->idCliente.'"'?>style="color:red;"><i class="fa fa-trash-o fa-lg"></i></a>
												</div>
											</td>
										</tr>
									<?
											}
										}	
									?>	
									</tbody>
								</table>

<!-- POPUP, NO FUNCIONA OPCACA TODA LA PANTALLA ############################################################ -->
<?if (!empty($clientes)) {
	foreach ($clientes->result() as $cliente) {
?>
<!-- Modal -->
<div id="myModal<?=$cliente->idCliente; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title"> <?=$cliente->nombre;?> </h3>
      </div>
      <div class="modal-body row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="form-group col-md-12">
		  		<label class="col-md-3 control-label" for="nroguia">Código</label> 
		  		<div class="col-md-5">
		  			<input id="codigo" name="codigo" placeholder="Código del Cliente " class="form-control input-md" type="text" value= <?=$cliente->idCliente;?> readonly>
		  		</div>
			</div>
			<div class="form-group col-md-12">
		  		<label class="col-md-3 control-label" for="nroguia">Dirección</label>  
		  		<div class="col-md-8">
					<textarea  style="resize:none;" id="direccion" class="form-control" rows="3" disabled readonly> <?=$cliente->direccion;?> </textarea>
		  		</div>
			</div>
			<div class="form-group col-md-12">
		  		<label class="col-md-3 control-label" for="nroguia">Teléfono </label>  
		  		<div class="col-md-5" id="telefono">
		  			<input id="tlf0" name="tlf0" placeholder="Número de Teléfono" class="form-control input-md" type="text">
		  			<br>  			
		  		</div>
			</div>
			<div class="form-group col-md-12">
		  		<label class="col-md-3 control-label" for="nroguia">Correo Electrónico</label>  
		  		<div class="col-md-5" id="correo">
		  			<input id="mail0" name="mail" placeholder="Dirección de Correo Electrónico" class="form-control input-md" type="text">
		  			<br>  	
		  		</div>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
									<?
											}
										}	
									?>	
<!-- ###################################################################################################### -->

								<div class="row"> <!-- Pie de pagina de la tabla -->
									<div class="col-sm-6">
										<div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all"></div>
									</div>
									<div class="col-sm-6">
										<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
											<ul class="pagination">
												<!-- Numero de paginas segun la cantidad de datos -->
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- Fin de la tabla -->
			</div> <!-- Fin area de trabajo central -->
		</div>
	</div>
</div>