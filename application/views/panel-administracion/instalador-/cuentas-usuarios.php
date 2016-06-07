<div class="uk-container">
	<div class="uk-grid cms-contenedor uk-animation-slide-top">
		<div class="uk-width-medium-1-1">
			<h3><strong>Cuentas de usuarios</h3>
			<p class="uk-text-success"><img src="<?php echo base_url('dist/img/soporte.png') ?>" width="64px" align="center"> Listo ya casi termínanos, solo necesitas crear una cuenta de usuario para ingresar a la aplicación.</p>
			<?php echo form_open('', 'class="uk-form"'); ?>
			<div class="uk-grid">
				<div class="uk-width-5-10">
					<div class="uk-form-row">
						<label class="uk-form-label" for="usu_email">Correo electrónico</label>
						<div class="uk-form-controls">
							<input type="text" name="usu_email" id="usu_email" class="uk-width-7-10" value="<?php echo set_value('usu_email') ?>">
							<?php echo form_error('usu_email'); ?>
						</div>
					</div>
					<div class="uk-form-row">
						<label class="uk-form-label" for="usu_clave">Clave</label>
						<div class="uk-form-controls">
							<div class="uk-form-password">
								<input type="password" name="usu_clave" id="usu_clave"  value="<?php echo set_value('usu_clave') ?>">
								<a href="" class="uk-form-password-toggle" data-uk-form-password>...</a>
							</div>
							<?php echo form_error('usu_clave'); ?>
						</div>
					</div>
					<div class="uk-form-row">
						<label class="uk-form-label" for="usu_confirmar_clave">Confirmar clave</label>
						<div class="uk-form-controls">
							<div class="uk-form-password">
								<input type="password" name="usu_confirmar_clave" id="usu_confirmar_clave"  value="<?php echo set_value('usu_confirmar_clave') ?>">
								<a href="" class="uk-form-password-toggle" data-uk-form-password>...</a>
							</div>
							<?php echo form_error('usu_confirmar_clave'); ?>
						</div>
					</div>
					<div class="uk-form-row">
						<button class="uk-button uk-button-primary" type="submit">Siguiente</button>
					</div>
				</div>
			</div>
		</div>
	<?php echo form_close(); ?>
	</div>
</div>