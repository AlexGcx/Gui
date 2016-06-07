<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
	}

	public function index()
	{
		$datos["titulo"] = "Instalación";
		$datos["pagina"] = "inicio-licencia";
		$this->load->view('panel-administracion/instalador/gui-ensamblador-instalador', $datos);
	}

	public function datos_servidor()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="uk-text-danger">', '</div>');
		switch($this->input->post()){
			case false:
			$this->load->helper('form');
			$datos["titulo"] = "Datos Servidor";
			$datos["pagina"] = "datos-servidor";
			$this->load->view('panel-administracion/instalador/gui-ensamblador-instalador', $datos);
			break;
			case true:
			switch($this->form_validation->run("datos_servidor")){
				case false:
				$this->load->helper('form');
				$datos["titulo"] = "Datos Servidor";
				$datos["pagina"] = "datos-servidor";
				$this->load->view('panel-administracion/instalador/gui-ensamblador-instalador', $datos);
				break;
				case true:
				$host = $this->input->post("host");
				$root = $this->input->post("root");
				$password = $this->input->post("password");
				$this->conectar_db($host, $root, $password);
				break;
			}
			break;
		}	
	}

	public function conectar_db($host, $root, $password)
	{
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$enlace = mysqli_connect("$host", "$root", "$password");
		if (!$enlace) {
			redirect('datos-servidor?error=true');
		}elseif($enlace){
			mysqli_close($enlace);
			$this->escribir_conexion($host, $root, $password);
			redirect('seleccionar-base-datos');
		}
	}

	public function escribir_conexion($host, $root, $password)
	{
		$i=1; 	
		$contenido = array();
		$archivo = fopen('application/config/database.php','r');
		while ($linea = fgets($archivo))
		{
			if ($i != 78 and $i != 79 and $i != 80)  
			{
				$contenido[] = $linea; 
			}elseif ($i == 78) {
				$contenido[] =" 	'hostname' => '$host',".chr(10);
			}elseif ($i == 79) {
				$contenido[] =" 	'username' => '$root',".chr(10);
			}elseif ($i == 80) {
				$contenido[] =" 	'password' => '$password',".chr(10);
			}
			$i++;
		}
		fclose($archivo);
		$contenido = implode($contenido, '');
		file_put_contents('application/config/database.php', $contenido);
	}

	public function seleccionar_base_datos()
	{
		switch ($this->input->post()) {
			case false:
				$this->load->helper('form');
				$this->load->dbutil();
				$this->load->model('Instalador_model', 'instalador', true);
				$datos['listado_base_datos'] = $this->instalador->listado_base_datos();
				$datos["titulo"] = "Base de Datos";
				$datos["pagina"] = "seleccionar-base-datos";
				$this->load->view('panel-administracion/instalador/gui-ensamblador-instalador', $datos);
			break;
			case true:
				$this->load->library('form_validation');
				$this->form_validation->set_error_delimiters('<div class="uk-text-danger">', '</div>');
				switch ($this->form_validation->run("seleccionar_db")) {
					case false:
						$this->load->helper('form');
						$this->load->dbutil();
						$this->load->model('Instalador_model', 'instalador', true);
						$datos['listado_base_datos'] = $this->instalador->listado_base_datos();
						$datos["titulo"] = "Base de Datos";
						$datos["pagina"] = "seleccionar-base-datos";
						$this->load->view('panel-administracion/instalador/gui-ensamblador-instalador', $datos);
					break;
					case true:
						$database = $this->input->post("basedatos");
						$this->escribir_base_datos($database);
						redirect("informacion-cms");
					break;
				}
			break;
		}
	}

	public function escribir_base_datos($db)
	{
		$i=1; 	
		$contenido = array();
		$archivo = fopen('application/config/database.php','r');
		while ($linea = fgets($archivo))
		{
			if ($i != 81)  
			{
				$contenido[] = $linea; 
			}elseif ($i == 81) {
				$contenido[] =" 	'database' => '$db',".chr(10);
			}
			$i++;
		}
		fclose($archivo);
		$contenido = implode($contenido, '');
		file_put_contents('application/config/database.php', $contenido);
	}

	public function informacion_cms()
	{
		switch($this->input->post()){
			case false:
				$this->load->helper('form');
				$datos['estilos'] = array("dist/taggingJS/tag-basic-style.css");
				$datos['js'] = array("dist/taggingJS/tagging.min.js", "dist/taggingJS/opciones.js");
				$datos["titulo"] = "Información del sitio web";
				$datos["pagina"] = "informacion-cms";
				$this->load->view('panel-administracion/instalador/gui-ensamblador-instalador', $datos);
			break;
			case true:
				$this->load->library('form_validation');
				$this->form_validation->set_error_delimiters('<div class="uk-text-danger">', '</div>');
				switch($this->form_validation->run("informacion_sitio")){
					case false:
						$this->load->helper('form');
						$datos['estilos'] = array("dist/taggingJS/tag-basic-style.css");
						$datos['js'] = array("dist/taggingJS/tagging.min.js", "dist/taggingJS/opciones.js");
						$datos["titulo"] = "Información del sitio web";
						$datos["pagina"] = "informacion-cms";
						$this->load->view('panel-administracion/instalador/gui-ensamblador-instalador', $datos);
					break;
					case true:
						$this->crear_tabla_informacion();
						$this->load->model('Instalador_model', 'instalador', true);
						$this->instalador->almacenar_informacion_sitio_web($this->input->post());
						redirect('usuarios');
					break;
				}
			break;
		}
	}

	public function crear_tabla_informacion()
	{
		$this->load->dbutil();
		$this->load->dbforge();
		$this->dbforge->drop_table(EXTENSION_TABLAS."informacion_cms", TRUE);
			$campos = array(
			        'info_id' => array(
			                'type' => 'INT',
			                'constraint' => 10,
			                'unsigned' => FALSE,
			                'auto_increment' => TRUE
			        ),
			        'info_nombre_sitio' => array(
			                'type' => 'VARCHAR',
			                'constraint' => '120',
			                'null' => TRUE,
			        ),
			        'info_descripcion_sitio' => array(
			                'type' =>'VARCHAR',
			                'constraint' => '255',
			                'constraint' => '255',
			                'null' => TRUE,
			        ),
			        'info_tag_sitio' => array(
			                'type' => 'VARCHAR',
			                'constraint' => '255',
			                'null' => TRUE,
			        ),
			        'info_autor' => array(
			                'type' => 'VARCHAR',
			                'constraint' => '255',
			                'null' => TRUE,
			        ),
			);
			$this->dbforge->add_field($campos);
			$this->dbforge->add_key('info_id', TRUE);
			$atributos = array('ENGINE' => 'InnoDB');;
			$this->dbforge->create_table(EXTENSION_TABLAS."informacion_cms", FALSE, $atributos);
	}

	public function usuarios()
	{
		switch($this->input->post()){
			case false:
				$this->load->helper('form');
				$datos["titulo"] = "Cuenta de usuarios";
				$datos["pagina"] = "cuentas-usuarios";
				$datos["js"] = array("dist/js/components/form-password.min.js");
				$this->load->view('panel-administracion/instalador/gui-ensamblador-instalador', $datos);
			break;
			case true:
				$this->load->helper('security');
				$this->load->library('form_validation');
				$this->form_validation->set_error_delimiters('<div class="uk-text-danger">', '</div>');
				switch($this->form_validation->run("cuentas_usuarios")){
					case false:
						$this->load->helper('form');
						$datos["titulo"] = "Cuenta de usuarios";
						$datos["pagina"] = "cuentas-usuarios";
						$datos["js"] = array("dist/js/components/form-password.min.js");
						$this->load->view('panel-administracion/instalador/gui-ensamblador-instalador', $datos);
					break;
					case true:
						$this->crear_tabla_usuarios();
						$this->load->model('Instalador_model', 'instalador', true);
						$temp = $this->input->post();
						unset($temp['usu_confirmar_clave']);
						$temp_datos = $temp;
						$temp_datos['usu_acceso'] = "1";
						$temp_datos['usu_clave'] = md5($this->input->post('usu_clave'));
						$this->instalador->almacenar_datos_usuarios($temp_datos);
						if (is_dir("application/views/panel-administracion/instalador")) {
							rename("application/views/panel-administracion/instalador", "application/views/panel-administracion/instalador-");
						}else{
							echo "ha ocurrido un error con el directorio de instalación.";
							exit();
						}
						redirect('finalizacion');
					break;
				}
			break;
		}
	}

	public function crear_tabla_usuarios()
	{
		$this->load->dbutil();
		$this->load->dbforge();
		$this->dbforge->drop_table(EXTENSION_TABLAS."usuarios_cms", TRUE);
			$campos = array(
			        'usu_id' => array(
			                'type' => 'INT',
			                'constraint' => 10,
			                'unsigned' => FALSE,
			                'auto_increment' => TRUE
			        ),
			        'usu_nombre' => array(
			                'type' => 'VARCHAR',
			                'constraint' => '120',
			                'null' => TRUE,
			        ),
			        'usu_apellido' => array(
			                'type' => 'VARCHAR',
			                'constraint' => '120',
			                'null' => TRUE,
			        ),
			        'usu_usuario' => array(
			                'type' => 'VARCHAR',
			                'constraint' => '80',
			                'null' => TRUE,
			        ),
			        'usu_email' => array(
			                'type' => 'VARCHAR',
			                'constraint' => '120',
			                'null' => TRUE,
			        ),
			        'usu_celular' => array(
			                'type' => 'VARCHAR',
			                'constraint' => '20',
			                'null' => TRUE,
			        ),
			        'usu_direccion' => array(
			                'type' => 'VARCHAR',
			                'constraint' => '255',
			                'null' => TRUE,
			        ),
			        'usu_clave' => array(
			                'type' => 'VARCHAR',
			                'constraint' => '255',
			                'null' => TRUE,
			        ),
			        'usu_acceso' => array(
			                'type' => 'INT',
			                'constraint' => '10',
			                'unsigned' => FALSE,
			        ),
			);
			$this->dbforge->add_field($campos);
			$this->dbforge->add_key('usu_id', TRUE);
			$atributos = array('ENGINE' => 'InnoDB');;
			$this->dbforge->create_table(EXTENSION_TABLAS."usuarios_cms", FALSE, $atributos);
	}

	public function finalizacion()
	{
		$datos["titulo"] = "Finalización";
		$this->load->view('panel-administracion/instalador-/head', $datos);
		$this->load->view('panel-administracion/finalizacion-instalacion');
		$this->load->view('panel-administracion/instalador-/footer');
	}

}

/* End of file instalador.php */
/* Location: ./application/controllers/instalador.php */