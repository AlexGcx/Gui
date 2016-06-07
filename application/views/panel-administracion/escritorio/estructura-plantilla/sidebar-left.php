<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
	<div class="uk-grid" data-uk-grid-margin="">
		<div class="uk-width-medium-2-10 uk-hidden-small">
			<ul class="uk-list uk-list-hover">
				<li>
					<a href="#">Actualizaciones <div style="float: right;" class="uk-badge uk-badge-notification">5</div></a>
				</li>
				<li>
					<a href="#">Publicar contenido</a>
				</li>
				<li class="<?php if(current_url() == site_url('categorias')): echo 'uk-list-active'; endif; ?>">
					<a href="<?php echo site_url('categorias') ?>">Categorías</a>
				</li>
				<li>
					<a href="#">Temas</a>
				</li>
				<li>
					<a href="#">Editor de código</a>
				</li>
				<li>
					<a href="#">Plugin</a>
				</li>
				<li>
					<a href="#">Estadisticas</a>
				</li>
				<li>
					<a href="#">Perfil de usuarios</a>
				</li>
				<li>
					<a href="#">Configuraciones</a>
				</li>
				<li>
					<a href="#">Información</a>
				</li>
				<li>
					<a href="<?php echo site_url('desconectar') ?>">Salir</a>
				</li>
			</ul>
		</div>