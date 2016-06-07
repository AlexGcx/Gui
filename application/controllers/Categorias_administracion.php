<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_administracion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library(array('session', 'validar_sesion_usuarios'));
		$this->validar_sesion_usuarios->verificar_sesion($this->session->userdata('email'), $this->session->userdata('acceso'));
	}

	public function index()
	{
		$this->load->helper('form');
		$datos['titulo'] 	= "Categorías";
		$datos['estilos'] 	= array("dist/css/escritorio-cms/categorias.css");
		$datos['js'] 		= array("dist/js/escritorio-cms/categorias.js");
		$this->load->model('Categorias_administracion_model', 'categorias', true);
		$datos['indices'] 	= $this->categorias->indices();
		$datos['sub_indice'] 	= $this->categorias->sub_indices();
		$this->load->helper('imprimir_categorias');
		$this->load->view('panel-administracion/escritorio/categorias/ensamblador-escritorio-categorias', $datos);		
	}

	public function eliminar_categorias(){
		$this->load->model('Categorias_administracion_model', 'categorias', true);
		$this->categorias->eliminar_categorias($_POST['id']);
		echo "<p class='uk-text-large uk-text-success'>Se ha eliminado la categoria correctamente.</p>";
	}

}

/* End of file Categorias_administracion.php */
/* Location: ./application/controllers/Categorias_administracion.php */