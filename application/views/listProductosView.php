<!-- Lista de Productos -->
<div id="page-wrapper" >
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12 radio">
				<h1>Listado de Productos</h1>   
			</div>
		</div> 
		<div class="row">
			<div class="col-md-12"> <!-- Area de trabajo central -->
				<div class="panel panel-default"> <!-- Titulo de la tabla -->
					<div class="panel-heading"> 
						<a href="AddProductosController" class="btn btn-success col-md-offset-10">
							<i class="fa fa-plus"></i>Agregar
						</a> 
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<div role="grid" class="dataTables_wrapper form-inline" id="dataTables-example_wrapper">
								<div class="row"> <!-- Cabecera de la tabla -->
									<div class="col-sm-7">
										<div class="dataTables_length" id="dataTables-example_length">
										<!-- Registros a visualizar -->
										</div>
									</div>
									<div class="col-sm-5">
										<div id="dataTables-example_filter" class="dataTables_filter">
										<!-- Buscar -->
										</div>
									</div>
								</div>
								<table id="dataTables-example" class="table table-striped table-hover dataTable no-footer" aria-describedby="dataTables-example_info"> <!-- table-bordered para hacer los bordes visibles -->
									<thead>
										<tr role="row">
											<th style="text-align: center" class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending">ID</th>
											<th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Descripción</th>
											<th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tipo<br>Madera</th>
											<th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Ancho</th>
											<th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Alto</th>
											<th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Largo</th>
											<th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tipo<br>Producto</th>
											<th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Inventario <br>Disponible</th>
											<th style="width: 92px;"></th>
										</tr>
									</thead>
									<tbody>
									<?
									if (!empty($productos)) {
					    					foreach ($productos->result() as $producto) {
						    		?>
										<tr  class="gradeA odd">
											<td style="text-align: center" class="sorting_1"> <?=$producto->idProducto; ?> </td>
											<td style="text-align: center" class="center"> <?=$producto->descripcion; ?> </td>
											<td style="text-align: center" class="center"> <?=$producto->tipoMadera; ?></td>
											<td style="text-align: center" class="center"> <?=$producto->dimAncho; ?></td>
											<td style="text-align: center" class="center"> <?=$producto->dimAlto; ?></td>
											<td style="text-align: center" class="center"> <?=$producto->dimLargo; ?></td>
											<td style="text-align: center" class="center"><?=$producto->tipoProducto; ?></td>
											<td style="text-align: center" class="center"><?=$producto->inventarioDisponible; ?></td>
											<td style="text-align: center">
												<div class="btn-group"> <!-- Botones de edicion x registro -->
													<a href="#"><i class="fa fa fa-eye fa-lg" data-toggle="modal" data-target="#myModal"></i></a>&nbsp;&nbsp;
  													<a href="EditProductosController"><i class="fa fa-pencil fa-lg"></i></a> &nbsp;&nbsp;&nbsp;|
  													<a href="" onclick=<? echo "eliminar('".$producto->idProducto."')";?> ><i style="color:red;"><i class="fa fa-trash-o fa-lg"></i></a>
												</div>
											</td>
										</tr>
									<?
											}
										}	
									?>	
									</tbody>
								</table>

<!-- POPUP, NO FUNCIONA OPCACA TODA LA PANTALLA//////////////////////////////////////////////////////////////////////////////////////// -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->



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

<script src="assets/js/productos.js"></script>
