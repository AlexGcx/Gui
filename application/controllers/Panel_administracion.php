<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_administracion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		if(is_dir(RUTA_INSTALADOR) == true){
			redirect('instalacion');
		}
	}

	public function index()
	{
		$datos["titulo"] = NOMBRE_APLICACION." - Inicio";
		$datos["pagina"] = "inicio";
		$this->load->view("panel-administracion/panel-escritorio/gui-ensamblador-panel-administracion", $datos);
	}

}

/* End of file panel-administracion.php */
/* Location: ./application/controllers/panel-administracion.php */