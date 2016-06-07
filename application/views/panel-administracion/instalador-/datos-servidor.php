<div class="uk-container cms-contenedor uk-animation-slide-top">
	<div class="uk-grid">
		<div class="uk-width-1-1">
			<?php if(isset($_GET["error"]) and $_GET["error"] == true){ ?>
				<div class="uk-panel uk-panel-box uk-width-medium-1-1">
                    <div class="uk-panel-badge uk-badge uk-badge-danger">Error</div>
                    <h3 class="uk-panel-title"><i class="uk-icon-info-circle"></i> Atención</h3>
                    A ocurrido un error al momento de conectar con el servidor, para evitar este error asegurate de ingresar los datos correctos de tu host, usuario y password.
                </div>	
			<?php } ?>
			<h3><strong>Instalación y configuración de <?php echo NOMBRE_APLICACION ?></strong></h3>
			<p><img src="<?php echo base_url('dist/img/soporte.png') ?>" width="64px" align="center"> A continuación, es necesario que configures el entorno de alojamiento de la aplicación.</p>
			<?php echo form_open("", "class='uk-form' id='form_servidor'"); ?>
			<div class="uk-grid">
				<div class="uk-width-medium-5-10">
					<h3>Datos del servidor</h3>
					<div class="uk-form-row">
						<label for="host" class="uk-form-label">Servidor (host)</label>
						<div class="uk-form-controls">
							<input type="text" name="host" id="host" class="uk-width-7-10" value="<?php echo set_value('host') ?>" />
							<?php echo form_error("host") ?>
						</div>
					</div>
					<div class="uk-form-row">
						<label for="root" class="uk-form-label">Usuario base de datos</label>
						<div class="uk-form-controls">
							<input type="text" name="root" id="root" class="uk-width-5-10" value="<?php echo set_value('root') ?>" />
							<?php echo form_error("root") ?>
						</div>
					</div>
					<div class="uk-form-row">
						<label for="password" class="uk-form-label">Password</label>
						<div class="uk-form-controls">
							<input type="password" name="password" id="password" class="uk-width-5-10"  />
						</div>
					</div>
					<div class="uk-form-row">
						<button type="button" id="confirmar_datos_servidor" class="uk-button uk-button-primary">Siguiente</button>
					</div>
				</div>
			</div>			
		</div>
		<div class="uk-width-1-1" style="display: none" id="icon_cargar">
			<div class="uk-text-right">
				<i class="uk-icon-spinner uk-icon-spin uk-icon-small"></i> Conectando...
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>