<?php  
	$datos['titulo'] = $titulo;
	$this->load->view('panel-administracion/plantilla/archivos/head', $datos);
	$this->load->view('panel-administracion/plantilla/archivos/menu-superior');
	$this->load->view('panel-administracion/panel-escritorio/menu-opciones');
	$this->load->view('panel-administracion/panel-escritorio/'.$pagina.'');
	$this->load->view('panel-administracion/panel-escritorio/pie-pagina');
	$this->load->view('panel-administracion/plantilla/archivos/footer');
?>