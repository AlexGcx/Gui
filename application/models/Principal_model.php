<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function listado_base_datos()
	{
		return $this->dbutil->list_databases();
	}
}

/* End of file principal_model.php */
/* Location: ./application/models/principal_model.php */