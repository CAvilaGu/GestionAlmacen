<!-- Lista de Despacho para el area de Produccion -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12 radio">
                <h1>Lista de Entradas a Almacén</h1>   
            </div>
        </div> 
        <div class="row">
            <div class="col-md-12"> <!-- Area de trabajo central -->
                <div class="panel panel-default"> <!-- Titulo de la tabla -->
                    <div class="panel-heading"> 
                        <a href="AddStockController" class="btn btn-success col-md-offset-10">
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
                                            <th style="text-align: center width: 60px;" class="sorting_desc" tabindex="1" aria-controls="dataTables-example" rowspan="1" colspan="1"  aria-sort="descending" >ID</th>
                                            <th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  >Lote</th>
                                            <th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Fecha de Entrada</th>
                                            <th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Supervisor</th>
                                            <th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Nro. Bultos</th>
                                            <th style="text-align: center" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Estado</th>
                                            <th style="width: 100px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?
                                    if (!empty($stocks)) {
                                            foreach ($stocks->result() as $stock) {
                                    ?>
                                        <tr class="gradeA odd">
                                            <td style="text-align: center" class="sorting_1"> <?=$stock->idLote; ?></td>
                                            <td style="text-align: center" class="center"> <?=$stock->tipoLote; ?></td>
                                            <td style="text-align: center" class="center"> <?=$stock->fechaEntrada; ?></td>
                                            <td style="text-align: center" class="center"> <?=$stock->nombre;?>&nbsp;<?=$stock->apellido;?></td>
                                            <td style="text-align: center" class="center"> <?=$stock->nroBultos; ?></td>
                                            <td style="text-align: center" class="center"> <?=$stock->estadoLote; ?></td>
                                            <td style="text-align: center" class="center">
                                                <div class="btn-group"> <!-- Botones de edicion x registro -->
                                                    <a href="stockController?lote=<? echo $stock->idLote ?>"><i class="fa fa-file-pdf-o"></i></a>&nbsp;&nbsp;
                                                    <a href="#"><i class="fa fa-info-circle fa-lg" ></i></a>
                                                    <a href="EditGalponesController"><i class="fa fa-pencil fa-lg"></i></a> &nbsp;&nbsp;|
                                                    <a href="#" style="color:red;"><i class="fa fa-trash-o fa-lg"></i></a>
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


