<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- titulo de la pagina a cargar -->
	<title>Iniciar sesión</title>
	<!-- inicio de estilos css -->
	<link rel="icon" type="text/css" href="<?php echo base_url('dist/img/logos/gui-32.png') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/uikit.css') ?>">
	<style type="text/css" media="screen">
		html{
			background-color: #fefefe;
		}
		.container-center{
			border-radius: 4px;
			margin: 2% auto;
			padding: 15px;
		}
		.uk-form-row{
			text-align: left;
		}
		.eslogan{
			font-weight: bold;
			margin-top: 5px;
			margin-bottom: 0px;
		}
		.img-eslogan{
			padding: 10px;
			background-color: #efefef;
		}
		h3{
			margin-top: 0px;
		}
		h2, h3, label{
			font-family: "calibri";
			color: #1C2A39;
		}
	</style>
	<!-- fin de estilos css -->
</head>
<body>
	<div class="uk-width-large-1-2 uk-container-center uk-text-center container-center">
		<img class="uk-border-circle img-eslogan" src="<?php echo base_url('dist/img/logos/gui-64.png') ?>">
		<h2 class="eslogan"><?php echo NOMBRE_APLICACION ?></h2>
		<h3>Iniciar sesión de usuarios</h3>
			<div class="uk-width-1-2 uk-container-center uk-text-center">
				<?php echo form_open('panel_administracion/envio_formulario_acceso', 'class="uk-form" id="inicio_sesion" '); ?>
					<div class="uk-form-row">
						<label class="uk-form-label" for="usu_email">Correo electrónico <?php echo form_error("usu_email") ?></label>
						<div class="uk-form-controls">
							<input type="text" name="usu_email" id="usu_email" class="uk-width-1-1" value="<?php 
								if(!empty($this->session->userdata('inicio_sesion_email')) and !isset($_GET['acceso']) and form_error('usu_email') =='' and set_value('usu_email') =='' ){
									echo  trim($this->session->userdata('inicio_sesion_email'));
								}
									echo set_value('usu_email');
							?>">
						</div>
					</div>
					<div class="uk-form-row">
						<label class="uk-form-label" for="usu_clave">Clave de acceso <?php echo form_error("usu_clave") ?></label>
						<div class="uk-form-controls">
							<input type="password" name="usu_clave" id="usu_clave" class="uk-width-1-1" value="<?php 
								if(!empty($this->session->userdata('inicio_sesion_clave')) and !isset($_GET['acceso']) and form_error('usu_clave') =='' and set_value('usu_clave') ==='' ){
									echo  trim($this->session->userdata('inicio_sesion_clave'));
								}
									echo set_value('usu_clave');
							?>">
						</div>
					</div>
					<div class="uk-form-row">
				                    <label><input type="checkbox" name="recordar_datos" <?php if(!empty($this->session->userdata('recordar')) == true ){ echo "checked=''"; } ?>> Recordar mis datos de acceso</label>
				                </div>
					<div class="uk-form-row">
						<button type="button" class="uk-button uk-button-default" id="boton_formulario" data-uk-modal>Iniciar sesión</button>
					</div>
					<div class="uk-form-row">
						<div class="uk-text-right">
							<a href="#">He olvidado mi contraseña</a>
						</div>
					</div>
					<div class="uk-form-row">
						<span><?php echo NOMBRE_APLICACION ?> Copyright (c) 2016-<?php echo date('Y') ?>. Sistema de Gestor de Contenido Dinámico.</span>
					</div>
				<?php echo form_close(); ?>
			</div>
	</div>
<div id="acceso_error" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        Correo electrónico o clave de acceso incorrectos...
    </div>
</div>
<div id="cargando" class="uk-modal">
    <div class="uk-modal-dialog">
        <div class="uk-modal-spinner"></div>
        <div>Conectando...</div>
    </div>
</div>
</body>
<!-- inicio archivos de javascript -->
	<script src="<?php echo base_url('dist/js/jquery-2.2.4.js') ?>"></script>
	<script src="<?php echo base_url('dist/js/uikit.js') ?>"></script>
	<script>
		$('#boton_formulario').click(function(){
			var modal = UIkit.modal("#cargando");
			if ( modal.isActive() ) {
			    modal.hide();
			} else {
			    modal.show();
			}
			setTimeout(function(){
				$("#inicio_sesion").submit();
			}, 1500);
		});
		<?php if(isset($_GET['acceso']) and $_GET['acceso'] == 0) {?>
			var modal = UIkit.modal("#acceso_error");
			modal.show();
		<?php } ?>
	</script>
<!-- fin archivos de javascript -->
</body>
</html>