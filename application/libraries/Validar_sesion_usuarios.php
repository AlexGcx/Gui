<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validar_sesion_usuarios {

	public function verificar_sesion($email, $acceso)
	{
		if(empty($email) and empty($acceso)){
			redirect('administracion/error_404');
		}
	}
}