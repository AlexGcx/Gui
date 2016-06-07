<?php  
	$datos['titulo'] = $titulo;
	$this->load->view('panel-administracion/instalador/head', $datos);
	$this->load->view('panel-administracion/instalador/'.$pagina.'');
	$this->load->view('panel-administracion/instalador/footer');
?>