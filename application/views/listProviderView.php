<!-- Lista de Proveedores -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-10 radio">
             	<h1>Listado de Entradas a Almacén</h1>   
            </div>
        </div> 
        <div>
			<form class="form-horizontal">
				<fieldset>
				<!-- Area de trabajo -->
					<div class="col-md-10">
						  <table class="table table-striped">
						    <thead>
						      <tr>
						      	<th>	
								</th>
						        <th>ID Proveedor</th>
						        <th>Nombre</th>
						        <th>Proveedor</th>
						      </tr>
						    </thead>

						    <tbody>

<?
if (!empty($Proveedores)) 
{
						    	foreach ($Proveedores->result() as $Proveedor) {
						    	?>
						      <tr>
						      	<td>
								  <label>
						   			 <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						 		 </label>  		
								</td>
						        <td> <?=$Proveedor->nombreComercial; ?></td>
						        <td> <?=$Proveedor->rif; ?></td>

						      <? }}?>

						    </tbody>
						  </table>
						</div>

						<div class="col-md-2" stylus="float: right;">
							<div style="background-color:gree; color: white; font-size: 16px; border-radius: 25px; padding: 40px 50px 5px 0px;"> 
						        <button class="btn btn-success btn-md btn-block">Ver   </button>
						    </div>
							<div style="background-color:gree; color: white; font-size: 16px; border-radius: 25px; padding: 5px 50px 5px 0px;"> 
						        <a href="" class="btn btn-success btn-md btn-block">Nuevo</a> 
						    </div>
							<div style="background-color:gree; color: white; font-size: 16px; border-radius: 25px; padding: 5px 50px 5px 0px;"> 
						        <a href="" class="btn btn-success btn-md btn-block">Eliminar</a> 
						    </div>
						</div>

				</fieldset>
			</form>

  		</div>
	</div>
</div>