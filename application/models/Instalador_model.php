<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalador_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function listado_base_datos()
	{
		return $this->dbutil->list_databases();
	}

	public function almacenar_informacion_sitio_web($datos)
	{
		$this->db->insert(EXTENSION_TABLAS.'informacion_cms', $datos);
	}

	public function almacenar_datos_usuarios($datos)
	{
		$this->db->insert(EXTENSION_TABLAS.'usuarios_cms', $datos);
	}

}

/* End of file instalador_model.php */
/* Location: ./application/models/instalador_model.php */