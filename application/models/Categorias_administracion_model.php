<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_administracion_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function eliminar_categorias($id)
	{
		$this->db->where('cat_id', $id);
		$this->db->delete(''.EXTENSION_TABLAS.'categorias_cms');
	}

	public function indices()
	{
		$this->db->where('cat_indice', 1);
		$consulta = $this->db->get(''.EXTENSION_TABLAS.'categorias_cms');
		return $consulta->result();
	}

	public function sub_indices()
	{
		$this->db->where('cat_indice', 0);
		$this->db->where('cat_sub_indice >=', 1);
		$consulta = $this->db->get(''.EXTENSION_TABLAS.'categorias_cms');
		return $consulta->result();
	}

}

/* End of file Categorias_administracion_model.php */
/* Location: ./application/models/Categorias_administracion_model.php */