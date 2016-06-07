<div class="uk-container cms-contenedor uk-animation-slide-top">
	<div class="uk-grid">
		<div class="uk-width-1-1">
			<h3><strong>Información del siteo web</h3>
			<p><img src="<?php echo base_url('dist/img/soporte.png') ?>" width="64px" align="center"> Es necesario que brindes información precisa de tu sitio web, de esto depende el SEO de tu sitio.</p>
			<?php echo form_open("", "class='uk-form' id='form_informacion'"); ?>
			<div class="uk-grid">
				<div class="uk-width-medium-5-10">
					<h3>Siteo web</h3>
					<div class="uk-form-row">
						<label for="info_nombre_sitio" class="uk-form-label">Como sera el nombre de tu sitio web</label>
						<div class="uk-form-controls">
							<input type="text" name="info_nombre_sitio" id="info_nombre_sitio" class="uk-width-5-10" value="<?php echo set_value('info_nombre_sitio') ?>" />
							<?php echo form_error("info_nombre_sitio") ?>
						</div>
					</div>
					<div class="uk-form-row">
						<label for="info_descripcion_sitio" class="uk-form-label">Describe el perfil del sitio</label>
						<div class="uk-form-controls">
							<input type="text" name="info_descripcion_sitio" id="info_descripcion_sitio" class="uk-width-1-1" value="<?php echo set_value('info_descripcion_sitio') ?>" />
							<?php echo form_error("info_descripcion_sitio") ?>
						</div>
					</div>
					<div class="uk-form-row">
						<label for="info_autor" class="uk-form-label">Autor</label>
						<div class="uk-form-controls">
							<input type="text" name="info_autor" id="info_autor" class="uk-width-5-10" value="<?php echo set_value('info_autor') ?>" />
							<?php echo form_error("info_autor") ?>
						</div>
					</div>
				</div>				
			</div>			
		</div>
		<div class="example-wrapper" style="margin-top: 13px; max-width: 555px;">
	        <div class="tags well">
	            <label for="tag" class="control-label">Palabra clave para la busquedad de tu sitio en los navegadores</label>
	            <div data-tags-input-name="taggone" id="tag"><?php echo set_value('info_tag_sitio') ?></div>
	            <?php echo form_error("info_tag_sitio") ?>
	            <p class="help-block">Pulse Enter, coma o la barra espaciadora para crear una nueva etiqueta, Retroceso o Borrar para eliminar el último.</p>
	        </div>
	    </div>
	    <div class="uk-form-row">
			<button type="button"  class="uk-button uk-button-primary" id="formulario_informacion">Siguiente</button>
		</div>
	</div>
	<input type="hidden" name="info_tag_sitio" id="palabras">
	<?php echo form_close();  ?>
</div>