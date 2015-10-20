correo='';
telefono='';
tlf=mail=1;
Atelefono=[];
Acorreo=[];

function eliminarTelefono(a){
	telefono=a;
	$('#modalPhone').modal('show');
}
function eliminarMail(a){
	correo=a;
	$('#modalMail').modal('show');
}
$("#eliminarMail").click(function(){
	$.post("../postEliminarCorreo",{correo:correo, codigo:codigo}).done(function(data){
		if(parseInt(data)==0){
			 window.location.reload();
		}
		alert(data)
	});
});
$("#eliminarTelefono").click(function(){
	$.post("../postEliminarTelefonoCliente",{telefono:telefono, codigo:codigo}).done(function(data){
		if(parseInt(data)==0){
			 window.location.reload();
		}
	});
});
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


$("#guardar").click(function(){
		nombre=$("#nombre").val();
		direccion=$("#direccion").val();
		for (i = 0; i < tlf; i++) {
			x=$("#tlf"+i).val();
			if(x==''){
				
				break;
			}
			Atelefono[i]=$("#tlf"+i).val()
		}
		for (i = 0; i < mail; i++) {
			x=$("#mail"+i).val();
			if(x==''){
				
				break;
			}
			Acorreo[i]=$("#mail"+i).val()
		}
		$.ajax({
				type: "POST",
			   data: {codigo:codigo,nombre:nombre,direccion:direccion,telefono:Atelefono,correo:Acorreo},
			   url: "../postEditClientesController",
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