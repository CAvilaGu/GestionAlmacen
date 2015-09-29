$(document).ready(function(){
	var tlf=1,mail=1;
	telefono=[];
	correo=[];
	$('#clcTlf').click(function(){
		$('#telefono').append('<input id="tlf'+tlf+'" name="nroguia" placeholder="Número de Teléfono" class="form-control input-md" type="text">');
		$('#telefono').append('<br>');
		tlf++;
	});

	$('#clcMail').click(function(){
		$('#correo').append('<input id="mail'+mail+'" name="nroguia" placeholder="Dirección de Correo Electronico" class="form-control input-md" type="text">');
		$('#correo').append('<br>');
		mail++;
	});



	$("#agregar").click(function(){
		tipo=$("#tipo").val();
		codigo=$("#codigo").val();
		nombre=$("#nombre").val();
		direccion=$("#direccion").val();
		for (i = 0; i < tlf; i++) {
			x=$("#tlf"+i).val();
			if(x==''){
				
				break;
			}
			telefono[i]=$("#tlf"+i).val()
		}
		for (i = 0; i < mail; i++) {
			x=$("#mail"+i).val();
			if(x==''){
				
				break;
			}
			correo[i]=$("#mail"+i).val()
		}
		$.ajax({
				type: "POST",
			   data: {tipo:tipo,codigo:codigo,nombre:nombre,direccion:direccion,telefono:telefono,correo:correo},
			   url: "postClientesController",
			   success: function(msg){
			   	
			     if(msg=='Error'){
			     	alert('Error, no se guardo el cliente. Verifique si ya existe el cliente');
			     }else if(msg=='Success'){
			     	alert('El cliente ha sido guardado correctamente');
			     	 window.location.reload();
			     }else{
			     	alert(msg);
			     }
			   }
			});
	});
})

