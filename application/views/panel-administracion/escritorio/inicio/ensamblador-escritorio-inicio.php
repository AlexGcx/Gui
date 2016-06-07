<?php  
	$datos['titulo'] = $titulo;
	$this->load->view('panel-administracion/escritorio/estructura-plantilla/head', $datos);
	$this->load->view('panel-administracion/escritorio/estructura-plantilla/navbar');
	$this->load->view('panel-administracion/escritorio/estructura-plantilla/sidebar-left');
	$this->load->view('panel-administracion/escritorio/inicio/inicio');
	$this->load->view('panel-administracion/escritorio/estructura-plantilla/sidebar-hidden-left');
	$this->load->view('panel-administracion/escritorio/estructura-plantilla/footer');