<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_administracion_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function validar_acceso_usuarios($email, $clave){
		$this->db->where('usu_email', $email);
		$this->db->where('usu_clave', $clave);
		$consulta = $this->db->get("".EXTENSION_TABLAS."usuarios_cms");
			 if($consulta->num_rows() == 1){
			 	return $consulta->result();
			 }
			 else{
			 	return false;
			 }

	}

}

/* End of file Panel_administracion_model.php */
/* Location: ./application/models/Panel_administracion_model.php */