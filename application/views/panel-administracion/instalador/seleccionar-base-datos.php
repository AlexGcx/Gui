<div class="uk-container uk-animation-slide-right">
	<div class="uk-grid gui-contenedor">
		<div class="uk-width-1-1">
		<?php echo form_open("", "class='uk-form'"); ?>
			<p class="uk-text-success"><img src="<?php echo base_url('dist/img/soporte.png') ?>" width="64px" align="center"> ¡Excelente la conexión con el servidor fue exitosa!.</p>
			<p class="uk-text-danger">Antes de continuar asegurate que la base no contenga ninguna tabla.</p>
			<div class="uk-grid">
				<div class="uk-width-medium-5-10">
					<h3>Almacenamiento</h3>
					<div class="uk-form-row">
						<label class="uk-form-label" for="basedatos">Seleccionar base de datos</label>
						<div class="uk-form-controls">
							<select name="basedatos" id="basedatos" class="uk-width-7-10"> 	
								<option value=""></option>
								<?php foreach($listado_base_datos as $filas => $valor){ ?>
									<option value="<?php echo $valor ?>"><?php echo $valor ?></option>
								<?php } ?>
							</select>
							<?php echo form_error("basedatos") ?>
						</div>
					</div>
					<p>Muy bien ahora, por favor, establece la base de datos que vas a utilizar para el almacenamiento y funcionamiento de la aplicación.</p>
					<div class="uk-form-row">
						<button type="submit" class="uk-button uk-button-primary">Seleccionar</button>
					</div>
				</div>
			</div>
		</div>
	<?php echo form_close(); ?>
	</div>
</div>