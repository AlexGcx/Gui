$(document).ready(function(){
	$("#enviar_licencia").click(function(){
		if( $("#aceptar_licencia").prop("checked") ){
			$(location).attr("href", "datos-servidor");
		}else{
			var modal = UIkit.modal("#seleccionar_licencia");
			if ( modal.isActive() ) {
			    modal.hide();
			} else {
			    modal.show();
			}	
		}
	});
	$("#confirmar_datos_servidor").click(function(){
		$("#icon_cargar").show();
		setTimeout(function(){
			$("#icon_cargar").hide()
			$("#form_servidor").submit();
		}, 1500);
	});
	$("#formulario_informacion").click(function(){
		var palabras = "";
		$('input[name="taggone[]"]').each(function() {
			palabras += $(this).val() + ", ";
		});
		//eliminamos la última coma.
		palabras = palabras.substring(0, palabras.length-2);
		$("#palabras").val(palabras);
		$("#form_informacion").submit();
	});
});