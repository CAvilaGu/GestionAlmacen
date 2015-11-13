var detalle;
comp=1;list= new Array();
listar();
var stock = new FormData(); 
producto=new Array();
cPieza=new Array();
cPaquete=new Array();
volumen=new Array();
ancho=new Array();
alto=new Array();
largo=new Array();




function listar(){
	$.post("proveedoresController/listar",function(data){
		produco=JSON.parse(data);
		for(i=0;i<produco.length;i++){
			$("#proveedor").append('<option value="'+produco[i]['idProveedor']+'">'+produco[i]['nombreComercial']+'</option>');	
		} 
	});
	$.post("galponesController/listar",function(data){
		almacen=JSON.parse(data);
		for(i=0;i<almacen.length;i++){
			$("#almacen").append('<option value="'+almacen[i]['idAlmacen']+'">'+almacen[i]['descripcion']+'</option>');	
		} 
	});
	$.ajax({
			type: "POST",
			 url: "productosController/listar",
			  async: false,
			 success: function(data){
			 produco=JSON.parse(data);

				for(i=0;i<produco.length;i++){
					list=produco.slice();
					$("#producto0").append('<option value="'+produco[i]['idProducto']+'">'+produco[i]['descripcion']+'</option>');
				} 

			   }
			  
			});
	$("#tipoLote").change(function(){
		$("#adicional").show();
		$("#leyenda").html(lote=$(this).val());
		if(lote=='MATERIA PRIMA'){
			$("#desc").html("Nro. Guia Despachos");
		}else if(lote=='CONSUMIBLE'){
			$("#desc").html("Nro. Factura");
		}else if(lote=='PRODUCTO TERMINADO'){
			$("#desc").html("Nro. Orden");
		}else{
			$("#desc").html("Proceso Productivo");
			$("#adicional").hide();
		}
	})
}


$("#agregar").click(function(){
	$("#detalleBulto").append('<fieldset> \
							<legend style="text-align:center; text-color: black;"></legend>\
							<br>\
							<div class="form-group">\
								<label class="col-md-3 control-label" for="nroguia">Material</label> \
								<label class="col-md-3 control-label" for="nroguia">Cant. Piezas</label>  \
								<label class="col-md-3 control-label" for="nroguia">Cant. Paquetes</label>\
 								<label class="col-md-3 control-label" for="nroguia">Volumen Total</label>		\
							</div>\
							<div class="col-md-3">\
								<select class="form-control" id="producto'+comp+'">\
								</select> \
							</div>\
							<div class="col-md-3">\
								<input id="cPieza'+comp+'" name="nroguia" placeholder="Cant. Piezas" class="form-control input-md" type="text">\
							</div>\
							<div class="col-md-3">\
								<input id="cPaquete'+comp+'" name="nroguia" placeholder="Cant. Paquetes" class="form-control input-md" type="text">\
							</div>\
							<div class="col-md-3">\
								<input id="volumen'+comp+'" name="nroguia" placeholder="Volumen Total" class="form-control input-md" type="text">\
							</div>\
							<div class="form-group">\
								<label class="col-md-3 control-label" for="nroguia">Ancho Paquete</label> \
								<label class="col-md-3 control-label" for="nroguia">Alto Paquete</label>  \
								<label class="col-md-3 control-label" for="nroguia">Largo Paquete</label>\
 								<label class="col-md-3 control-label" for="nroguia">Unidad</label>\
							</div>\
								<div class="col-md-3">\
								<input id="ancho'+comp+'" name="nroguia" placeholder="Ancho Paquete" class="form-control input-md" type="text">	\
							</div>\
							<div class="col-md-3">\
								<input id="alto'+comp+'" name="nroguia" placeholder="Alto Paquete" class="form-control input-md" type="text">\
							</div>\
							<div class="col-md-3">\
								<input id="largo'+comp+'" name="nroguia" placeholder="Largo Paquete" class="form-control input-md" type="text">\
							</div>\
								<div class="col-md-1" style="width:8.7em; padding:auto;">\
								<select class="form-control" id="tipo" disabled>\
									<option value="M" selected>Metros</option>\
								</select> \
							</div>\
					</fieldset>');
				llenarSelect(comp);
				comp++;
				
})

function llenarSelect(a){
	for(i=0;i<list.length;i++){
					list=list.slice();
					$("#producto"+a).append('<option value="'+list[i]['idProducto']+'">'+list[i]['descripcion']+'</option>');
				} 
}




$("#procesar").click(function(){
	proveedor=$("#proveedor").val();
	tipoLote=$("#tipoLote").val();
	almacen=$("#almacen").val();
	fecha=$("#fecha").val();
	nroDesc=$("#nroDesc").val();
	var imagen = $('#imagen').prop('files')[0];   
   
	for (i = 0; i < comp; i++) {
		producto[i]=$("#producto"+i).val();
		cPieza[i]=$("#cPieza"+i).val();
		cPaquete[i]=$("#cPaquete"+i).val();
		volumen[i]=$("#volumen"+i).val();
		ancho[i]=$("#ancho"+i).val();
		alto[i]=$("#alto"+i).val();
		largo[i]=$("#largo"+i).val();
	}

	stock.append('proveedor',proveedor);
	stock.append('tipoLote',tipoLote);
	stock.append('almacen',almacen);
	stock.append('fecha',fecha);
	stock.append('nroDesc',nroDesc);
	stock.append('imagen',imagen);
	stock.append('producto',producto);
	stock.append('cPieza',cPieza);
	stock.append('cPaquete',cPaquete);
	stock.append('volumen',volumen);
	stock.append('ancho',ancho);
	stock.append('alto',alto);
	stock.append('largo',largo);      
    $.ajax({
                url: 'stockController/insertar', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: stock,                         
                type: 'post',
                success: function(resp){
                	if(resp==0){
						alert('Transaccion guardada correctamente');
						window.location.reload();
					}					
					else
						alert('Error al guardar datos');
	                }
	});





























})