<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- titulo de la pagina a cargar -->
	<title><?php echo $titulo ?></title>
	<!-- inicio de estilos css -->
	<link rel="icon" type="text/css" href="<?php echo base_url('dist/img/logos/gui-32.png') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/uikit.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/gui.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/gui-instalador.css') ?>">
	<?php  
		if( isset($estilos) and !empty($estilos) ){
			foreach ($estilos as $key => $value) {
				echo "<link rel='stylesheet' type='text/css' href='".base_url($value)."' />".chr(10);
			}
		}
	?>
	<!-- fin de estilos css -->
</head>
<body>