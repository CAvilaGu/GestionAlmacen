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
		$('#agregar').prop('disabled', true);
		codigo=$("#codigo").val();
		rif=$("#rif").val();
		nombreC=$("#nombreC").val();
		nombreF=$("#nombreF").val();
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
		if(rif.length==0){
			$("#alertRif").show();
		}else
		if(nombreC.length==0){
			$("#alertNombreC").show();
		}else
		if(nombreF.length==0){
			$("#alertNombreF").show();
		}else
		if(direccion.length==0){
			$("#alertDireccion").show();
		}else
		if(telefono.length==0){
			$("#alertTelefono").show();
		}else
		if(correo.length==0){
			$("#alertMail").show();
		}else{
			$.ajax({
				type: "POST",
			   data: {codigo:codigo,rif:rif,nombreC:nombreC,nombreF:nombreF,direccion:direccion,telefono:telefono,correo:correo},
			   url: "PostInsertarProveedoresController",
			   success: function(msg){
			     	if(msg==0){
			     		alert('Proveedor insertado correctamente')
			     		 window.location.reload();
			     	}
			     	else{
			     		alert('Error, puede que el codigo del proveedor ya exista')
			     	}
			  
			   }
			});
		}
		$('#agregar').prop('disabled', false);
	});

	function ocultar(a){
		$('#'+a).hide();
	}