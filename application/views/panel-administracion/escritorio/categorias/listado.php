<div class="uk-width-medium-8-10">
	<?php echo form_open('', 'class="uk-form"'); ?>
		<div class="uk-form-row">
			<label for="categoria" class="uk-form-label">Categoría</label>
			<div class="uk-form-controls">
				<input type="text" name="categoria" class="uk-width-1-2">
			</div>
		</div>
		<div class="uk-form-row">
			<label for="sub_categoria" class="uk-form-label">Sub Categoría</label>
			<div class="uk-form-controls">
				<select name="sub_categoria" id="sub_categoria">
					<?php imprimir_select($indices, $sub_indice); ?>
				</select>
			</div>
		</div>
	<?php echo form_close(); ?>
	<h2 style="margin-bottom: 30px;">Listado de categorías</h2>
	<?php echo imprimir($indices, $sub_indice); ?>
</div>
