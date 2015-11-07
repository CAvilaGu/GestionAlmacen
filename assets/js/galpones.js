var transito=[];
var vacio=[];
var anchoGalpon,largoGalpon,largoCoor,anchoCoor,ubicacion,descripcion,altoGalpon,altoCoor,unidad;
$("#procesar").click(function(){
	anchoGalpon=parseInt($('#anchoGalpon').val());
	largoGalpon=parseInt($('#largoGalpon').val());
	largoCoor=parseInt($('#largoCoor').val());
	anchoCoor=parseInt($('#anchoCoor').val());
	ubicacion=($('#ubicacion').val());
	descripcion=($('#descripcion').val());
	altoGalpon=parseInt($('#altoGalpon').val());
	altoCoor=parseInt($('#altoCoor').val());
	unidad=($('#unidad').val());
	dimAncho=Math.floor(anchoGalpon/anchoCoor);
	dimLargo=Math.floor(largoGalpon/largoCoor);
	$("#galpon").html('');
	$("#galpon").append('<table id="tabla" width="500" height="300" border="1"></table>')
	for(i=0;i<dimLargo;i++){
		$("#tabla").append("<tr id='columna"+i+"'></tr>");
		for(j=0;j<dimAncho;j++){
			vacio.push('f'+i+'c'+j);
			$("#columna"+i).append('<td id="f'+i+'c'+j+'">f'+i+'c'+j+'</td>')
		}
	}
	pendiente();
});

function pendiente(){
	$('td').click(function(){
		pos=$(this).attr('id');
		if((indice=transito.indexOf(pos))==-1){
			$(this).css("background-color","#1d1d1d");
			transito.push(pos);
		}else{
			transito.splice(indice,1);
			$(this).css("background-color","white");	
		}
	})
}
$("#guardar").click(function(){
	$.ajax({
				type: "POST",
			   data: {anchoGalpon:anchoGalpon,largoGalpon:largoGalpon,largoCoor:largoCoor,anchoCoor:anchoCoor,ubicacion:ubicacion,descripcion:descripcion,altoGalpon:altoGalpon,altoCoor:altoCoor,unidad:unidad,transito:transito,vacio:vacio},
			   url: "galponesController/insertar",
			   success: function(msg){
			     	if(msg==0){
			     		alert('Galpon insertado correctamente')
			     		 window.location.reload();
			     	}
			     	else{
			     		alert('Ocurrió un error y no se pudo insertar el galpon')
			     	}
			   }
	});
})

