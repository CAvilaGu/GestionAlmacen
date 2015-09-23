$(document).ready(function(){
	int a;
	$('#jejeps').click(function(){
		$('#telefono').append('<input id="nroguia"'+a' name="nroguia" placeholder="Número de Teléfono" class="form-control input-md" type="text">');
		$('#telefono').append('<br>');
		a++;
	});
})

