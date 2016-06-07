<nav class="uk-navbar uk-margin-large-bottom">
	<div class="uk-container uk-container-center">
		<a class="uk-navbar-brand uk-hidden-small" href="<?php echo site_url('escritorio') ?>"><strong><?php echo NOMBRE_APLICACION ?></strong></a>
		<ul class="uk-navbar-nav uk-hidden-small">
			<li>
				<a href="<?php echo site_url('escritorio') ?>">Inicio</a>
			</li>
			<li>
				<a href="<?php echo site_url('categorias') ?>">Categorías</a>
			</li>
			<li>
				<a href="layouts_blog.html">Publicaciones</a>
			</li>
			<li>
				<a href="layouts_documentation.html">Estadisticas</a>
			</li>
			<li>
				<a href="layouts_contact.html">Configuraciones</a>
			</li>
			<li>
				<a href="<?php echo site_url('desconectar') ?>">Salir</a>
			</li>
		</ul>
		<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
		<div class="uk-navbar-brand uk-navbar-center uk-visible-small"><strong><?php echo NOMBRE_APLICACION ?></strong></div>
	</div>
</nav>