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
											<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 158px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending">Identificador</th>
											<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 231px;" aria-label="Browser: activate to sort column ascending">Nombre</th>
											<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 209px;" aria-label="Platform(s): activate to sort column ascending">Dirección</th>
											<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">Teléfonos</th>
											<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 92px;" aria-label="CSS grade: activate to sort column ascending">Correos</th>
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
											<td class=" "> <?=$cliente->nombre; ?></td>
											<td class=" "> <?=$cliente->direccion; ?></td>
											<td class="center "> asdasd <br>  ;asdasdasd <br></td>
											<td class="center "></td>
											<td style="text-align: center">
												<div class="btn-group"> <!-- Botones de edicion x registro -->
													<a href=""><i class="fa fa-eye fa-lg"></i></a> &nbsp;&nbsp;&nbsp;
  													<a href="EditClientesController"><i class="fa fa-pencil fa-lg"></i></a> &nbsp;&nbsp;&nbsp;
  													<a href="#"><i class="fa fa-trash-o fa-lg"></i></a>
												</div>
											</td>
										</tr>
									<?
											}
										}	
									?>	
									</tbody>
								</table>
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


