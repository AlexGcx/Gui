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
		$this->load->library(array('session', 'validar_sesion_usuarios'));
	}

	public function vistas_index(){
		$this->load->view('panel-administracion/iniciar-sesion/acceder-sesion');
	}

	public function index()
	{
		$this->load->helper('form');$this->load->helper('form');
		$this->vistas_index();
	}

	public function envio_formulario_acceso()
	{
		$this->load->helper('form');$this->load->helper('form');
		switch ($this->input->post()) {
				case true:
				$this->load->library("form_validation");
				$this->form_validation->set_error_delimiters('<div class="uk-text-danger">', '</div>');
					switch ($this->form_validation->run("inicio_sesion")) {
						case false:
							$this->vistas_index();
						break;
						case true:
							$this->load->model('panel_administracion_model', 'administracion', true);
							$clave = $this->input->post('usu_clave');
							$respuesta = $this->administracion->validar_acceso_usuarios($this->input->post('usu_email'),  md5($this->input->post("usu_clave")) );
							if($respuesta != false and !empty($respuesta)){
								$this->load->library('session');
								$recordar_datos = $this->input->post("recordar_datos"); 
								if(isset($recordar_datos) and $recordar_datos == "on"){
									$this->session->set_userdata('recordar', true);
								}
								else{
									$this->session->set_userdata('recordar', false);
								}
								$this->session->set_userdata('email',  $respuesta[0]->usu_email);
								$this->session->set_userdata('nombre',  $respuesta[0]->usu_nombre." ".$respuesta[0]->usu_apellido);
								$this->session->set_userdata('acceso', $respuesta[0]->usu_acceso);
								$this->session->set_userdata('clave', $clave);
								redirect('escritorio');
							}
							else{
								redirect('iniciar-sesion?acceso=0');
							}
						break;
					}
				break;				
				case false:
					redirect('iniciar-sesion');
				break;
			}	
	}

	public function escritorio()
	{
		$this->validar_sesion_usuarios->verificar_sesion($this->session->userdata('email'), $this->session->userdata('acceso'));
		$datos['titulo'] = "Escritorio";
		$this->load->view('panel-administracion/escritorio/inicio/ensamblador-escritorio-inicio', $datos);
	}

	public function desconectar(){
		if($this->session->userdata('recordar') == 1){
			$email = $this->session->userdata('email');
			$clave = $this->session->userdata('clave');
			$sesion_iniciar_sesion = array(
				'inicio_sesion_email' => "$email",
				'inicio_sesion_clave' => "$clave",
			);
			$this->session->set_userdata($sesion_iniciar_sesion);
			$this->session->unset_userdata('nombre');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('clave');
			$this->session->unset_userdata('acceso');
			redirect('iniciar-sesion');
		}
		else{
			$this->session->sess_destroy();
			redirect('iniciar-sesion');
		}
	}

}

/* End of file panel-administracion.php */
/* Location: ./application/controllers/panel-administracion.php */