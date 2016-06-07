$(document).ready(function(){
	$("#sub_categoria").change(function(){
		var opcion = $.trim($("#sub_categoria option:selected").text());
		$("#sub_categoria option[value = 'hola']"); 
	});
});
	function eliminar_categoria(id_categoria){
    	$.ajax({
		  	url: 'eliminar-categorias',
			type : 'POST',
		   	data : { id : id_categoria},
		}).done(function() {
		  	modal = UIkit.modal.blockUI('Se ha eliminado correctamente la categoría'); 
		  	setTimeout(function(){ 
		  		modal.hide();
		  		location.reload(); 
		  	}, 1500);
		});
	}

	   