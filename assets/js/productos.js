var tipo_producto,origen,comp=1,list= new Array();
cantidadC=new Array();
productoC=new Array();
$(document).ready(function(){
	listar();

	$('#mas').click(function(){
		$('#composicion').append('<div class="col-md-5 col-md-offset-2"> \				\
									<select id="productoC'+comp+'" class="form-control">\
									</select> \
								</div>\
								<div class="col-md-3">\
										<input type="number" id="cantidadC'+comp+'" class="form-control" />\
								</div>\
								<br>');
		$('#composicion').append('<br>');
		llenarSelect(comp);
		comp++;
	});
	





	$("#tipo_producto").change(function(){
	tipo_producto=$( "#tipo_producto" ).val();
	if(tipo_producto==2){
		$("#origen").show();
		origen=$("input:radio[name=optOrigen]:checked").val();
		cambio(origen);
	}else{
		$("#origen").hide();
		$("#composicion").hide();
		$("#derivacion").hide();
	}
});

$("#formulario").change(function(){
	origen=$("input:radio[name=optOrigen]:checked").val();
	cambio(origen);
	});

function cambio(origen){
	if(origen==1){
			$("#composicion").show();
			$("#derivacion").hide();
		}else{
			$("#derivacion").show();
			$("#composicion").hide();
		}
}

	$("#guardar").click(function(){
		$('#guardar').prop('disabled', true);
		codigo=$( "#codigo" ).val();
		descripcion=$( "#descripcion" ).val();
		tipo=$( "#tipo" ).val();
		calidad=$( "#calidad" ).val();
		ancho=$( "#ancho" ).val();
		alto=$( "#alto" ).val();
		largo=$( "#largo" ).val();
		unidad=$( "#unidad" ).val();
		optimo=$( "#optimo" ).val();
		tipo_producto=$( "#tipo_producto" ).val();
		if(tipo_producto!=2){
			$.post("productosController/guardar",{codigo:codigo,
			descripcion:descripcion,
			tipo:tipo,
			calidad:calidad,
			ancho:ancho,
			alto:alto,
			largo:largo,
			unidad:unidad,
			optimo:optimo,
			tipo_producto:tipo_producto})
			.done(function(data){
				if(data==0){
					alert('Producto guardado correctamente');
					window.location.reload();
				}					
				else
					alert('Error el producto agregado ya existe');
			});
		}else{
			if(origen==2){
				producto=$("#producto2").val();
				cantidad=$("#cantidad2").val();
				$.post("productosController/guardar_derivado",{codigo:codigo,
				descripcion:descripcion,
				tipo:tipo,
				calidad:calidad,
				ancho:ancho,
				alto:alto,
				largo:largo,
				unidad:unidad,
				optimo:optimo,
				tipo_producto:tipo_producto,
				producto:producto,
				cantidad:cantidad,
				})
				.done(function(data){
					if(data==0){
						alert('Producto guardado correctamente');
						window.location.reload();
					}					
					else
						alert('Error el producto agregado ya existe');
				});	
			}
			else{
				for (i = 0; i < comp; i++) {
					cantidadC[i]=$("#cantidadC"+i).val();
					productoC[i]=$("#productoC"+i).val();
					if (cantidadC[i]=='')
						cantidadC[i]=1;
				}
				$.post("productosController/guardar_compuesto",{codigo:codigo,
				descripcion:descripcion,
				tipo:tipo,
				calidad:calidad,
				ancho:ancho,
				alto:alto,
				largo:largo,
				unidad:unidad,
				optimo:optimo,
				tipo_producto:tipo_producto,
				producto:productoC,
				cantidad:cantidadC,
				})
				.done(function(data){
					alert(data)
					// if(data==0){
					// 	alert('Producto guardado correctamente');
					// 	window.location.reload();
					// }					
					// else
					// 	alert('Error el producto agregado ya existe');
				});	

			}
		}

		$('#guardar').prop('disabled', false);
	});



   
});

function listar(){
	$.ajax({
			type: "POST",
			 url: "productosController/listar",
			  async: false,
			 success: function(data){
			 produco=JSON.parse(data);
				for(i=0;i<produco.length;i++){
					list=produco.slice();
					$("#productoC0").append('<option value="'+produco[i]['idProducto']+'">'+produco[i]['descripcion']+'</option>');
					$("#producto2").append('<option value="'+produco[i]['idProducto']+'">'+produco[i]['descripcion']+'</option>');
				} 
			   }
			  
			});
}

function llenarSelect(a){
	for(i=0;i<list.length;i++){
					list=list.slice();
					$("#productoC"+a).append('<option value="'+list[i]['idProducto']+'">'+list[i]['descripcion']+'</option>');
				} 
}