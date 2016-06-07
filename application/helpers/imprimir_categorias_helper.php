<?php  
function imprimir($indices, $sub_indice){
	echo "<ul style='list-style:none;' class='ul'>";
	foreach($indices as $indice){
		echo "<li id='".$indice->cat_id."'>".strtoupper($indice->cat_nombre)." <span class='botones-derecha'><a href='".site_url('categorias-editar/'.$indice->cat_id.'')."' class='uk-button uk-button-small'>Editar <i class='uk-icon-pencil uk-text-primary'></i></a> <button type='button' class='uk-button uk-button-small' onclick='UIkit.modal.confirm(\"¿Desea eliminar la categoría <b>$indice->cat_nombre</b>?\", function(){ eliminar_categoria($indice->cat_id); });'>Eliminar <i class='uk-icon-trash-o uk-text-danger'></i></button></span></li>";
		explorar($indice->cat_id, $sub_indice);
	}
	echo "</ul>";
}
function explorar($id, $listado_sub_indice){
	echo "<ul style='list-style:none;'>";
	foreach($listado_sub_indice as $sub_indice){
		if($sub_indice->cat_sub_indice == $id){
			echo "<li id='".$sub_indice->cat_id."'>$sub_indice->cat_nombre <span class='botones-derecha'><a href='".site_url('categorias-editar/'.$sub_indice->cat_id.'')."' class='uk-button uk-button-small'>Editar <i class='uk-icon-pencil uk-text-primary'></i></a> <button type='button' class='uk-button uk-button-small' onclick='UIkit.modal.confirm(\"¿Desea eliminar la categoría <b>$sub_indice->cat_nombre</b>?\", function(){ eliminar_categoria($sub_indice->cat_id); });'>Eliminar <i class='uk-icon-trash-o uk-text-danger'></i></button></span></li>";
			explorar($sub_indice->cat_id, $listado_sub_indice);
		}
	}
	echo "</ul>";
}

function imprimir_select($indices, $sub_indice){
	foreach($indices as $indice){
		echo "<optgroup label='".strtoupper($indice->cat_nombre)."'>";
		echo "<option value='".$indice->cat_id."'>".strtoupper($indice->cat_nombre)."</option>";
		explorar_select($indice->cat_id, $sub_indice);
		echo "</optgroup>";
	}
}
function explorar_select($id, $listado_sub_indice){
	static $espacios;
	foreach($listado_sub_indice as $sub_indice){
		if($sub_indice->cat_sub_indice == $id){
			$espacios .= "&nbsp&nbsp&nbsp";
			echo "<option value='".$sub_indice->cat_id."'>$espacios $sub_indice->cat_nombre</option>";
			explorar_select($sub_indice->cat_id, $listado_sub_indice);
		}
	}
    $espacios = "";
}