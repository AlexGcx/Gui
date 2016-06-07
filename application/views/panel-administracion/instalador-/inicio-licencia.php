<div class="uk-container cms-contenedor uk-animation-slide-left">
	<div class="uk-grid">
		<div class="uk-width-1-1">
			<h3><img src="<?php echo base_url('dist/img/soporte.png') ?>" width="64px" align="center"> ¿Hola que tal? bienvenido a la instalación de <strong><?php echo NOMBRE_APLICACION ?>.</strong></h3>
			<p>Instalar <?php echo NOMBRE_APLICACION ?> es muy sencillo, a continuación te presentaremos una serie de pasos a seguir asegúrate de ingresar la información que solicitaremos para la correcta instalación.</p>
			<p><strong>Terminos de licencia MIT</strong></p>
			<p>
				<form action="" class="uk-form">
					<fieldset>
						<div class="uk-form-row">
							<textarea name="contenido_licencia" style="width: 100%" rows="6" spellcheck="false"><?php echo NOMBRE_APLICACION ?> Copyright (c) 2016.
Por la presente se autoriza, de forma gratuita, a cualquier persona que haya obtenido una copia de este software y archivos de documentación asociados ("<?php echo NOMBRE_APLICACION ?>"), a utilizar el Software sin restricción, incluyendo sin limitación los derechos de usar, copiar, modificar, fusionar, publicar, distribuir y/o vender copias de este Software, y permitir lo mismo a las personas a las que se les proporcione el Software, de acuerdo con las siguientes condiciones:

El aviso de copyright anterior y este aviso de permiso tendrán que ser incluidos en todas las copias o partes sustanciales del Software.

EL SOFTWARE SE ENTREGA "TAL CUAL", SIN GARANTÍA DE NINGÚN TIPO, YA SEA EXPRESA O IMPLÍCITA, INCLUYENDO, A MODO ENUNCIATIVO, CUALQUIER GARANTÍA DE COMERCIALIZACIÓN, IDONEIDAD PARA UN FIN PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO LOS AUTORES O TITULARES DEL COPYRIGHT INCLUIDOS EN ESTE AVISO SERÁN RESPONSABLES DE NINGUNA RECLAMACIÓN, DAÑOS U OTRAS RESPONSABILIDADES, YA SEA EN UN LITIGIO, AGRAVIO O DE OTRO MODO, RESULTANTES DE O EN CONEXIÓN CON EL SOFTWARE, SU USO U OTRO TIPO DE ACCIONES EN EL SOFTWARE.</textarea>
						</div>
						<div class="uk-form-row">
                            <label data-uk-tooltip title="Aceptar terminos de licencia...">
                            	<input type="checkbox" id="aceptar_licencia"> Estoy de acuerdo con los términos de licencia
                            </label>
                        </div>
                        <div class="uk-form-row">
                        	<button type="button" id="enviar_licencia" class="uk-button uk-button-primary" data-uk-model="{target:'#seleccionar_licencia'}">Siguiente</button>
                        </div>
					</fieldset>
				</form>
			</p>
		</div>
	</div>
</div>
<div class="uk-modal" id="seleccionar_licencia">
	<div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>
		<h3><strong><i class="uk-icon-info-circle uk-icon-medium uk-text-success"></i> Atención</strong></h3>
		<p class="uk-text-large">Antes de seguir debes de aceptar los términos de licencia de la aplicación.</p>
	</div>
</div>