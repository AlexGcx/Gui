<nav class="uk-navbar uk-navbar-attached">
    <ul class="uk-navbar-nav">
        <li class="uk-text-center">
            <a href="<?php echo site_url('principal') ?>">
                Inicio
            </a>
        </li>
        <li>
            <a href="#">Manual de usuario</a>
        </li>
        <li class="uk-parent" data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
            <a href="">
                <i class="uk-icon-ellipsis-v"></i>
            </a>
            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-top" style="top: -218px; left: 0px;">
                <ul class="uk-nav uk-nav-navbar">
                    <li class="uk-nav-header">Publicaciones</li>
                    <li>
                        <a href="#">Categorías</a>
                    </li>
                    <li>
                        <a href="#">Historial</a>
                    </li>
                    <li class="uk-nav-header">Estadisticas</li>
                    <li>
                        <a href="#">Visitantes</a>
                    </li>
                    <li>
                        <a href="#">Graficos</a>
                    </li>
                </ul>
            </div>
        </li>
        <div class="uk-navbar-content uk-hidden-small">
            <form class="uk-form uk-margin-remove uk-display-inline-block">
                <input type="text" placeholder="¿Que andas buscando?">
                <button class="uk-button uk-button-primary" data-uk-tooltip title="Busquedad" data-uk-tooltip="{pos:'bottom-left'}"><i class="uk-icon-search"></i></button>
            </form>
        </div>
    </ul>

    <div class="uk-navbar-flip">
        <ul class="uk-navbar-nav">
            <li class="uk-parent" data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
            <a href="">Alex Guerrero <i class="uk-icon-user uk-icon-medium"></i></a>
                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-top" style="top: -218px; left: 0px;">
                    <ul class="uk-nav uk-nav-navbar">
                        <li>
                            <a href="#">Perfil</a>
                        </li>
                        <li>
                            <a href="#">Configuración</a>
                        </li>
                        <li>
                            <a href="#">Salir</a>
                        </li>
                    </ul>
                </div>

            </li>
        </ul>
    </div>
</nav>