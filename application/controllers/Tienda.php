<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {

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
		$this->load->view('tienda/saludo');
	}

}

/* End of file tienda.php */
/* Location: ./application/controllers/tienda.php */