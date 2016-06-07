<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = 
array(
	"datos_servidor" => array(
		array(
			"field"  => "host",
			"label"  => "servidor",
			"rules"  => "trim|required",
			"errors" => array(
				"required" => "Por favor debes de ingresar un nombre de %s."
				)
			),
		array(
			"field"  => "root",
			"label"  => "usuario de la base de datos",
			"rules"  => "trim|required",
			"errors" => array(
				"required" => "Por favor debes de ingresar un nombre de %s."
				)
			)
		),
	"seleccionar_db" => array(
		array(
			"field" => "basedatos",
			"label" => "base datos",
			"rules" => "required",
			"errors" => array(
				"required" => "Por favor debe de seleccionar una %s"
				)
			)
		),
	"informacion_sitio" => array(
		array(
			"field" => "info_nombre_sitio",
			"label" => "nombre para el sitio web",
			"rules" => "trim|required|min_length[10]|max_length[120]",
			"errors" => array(
				"required" => "Por favor debe de ingresar un %s",
				"min_length" => "El minimo de caracteres para el nombre del sitio web es de 10",
				"max_length" => "El maximo de caracteres para el nombre del sitio web es de 120"
				)
			),
		array(
			"field" => "info_descripcion_sitio",
			"label" => "descripción del sitio web",
			"rules" => "trim|required|min_length[20]|max_length[255]",
			"errors" => array(
				"required" => "Por favor debe de ingresar una %s",
				"min_length" => "El minimo de caracteres para la descripción del sitio web es de 20",
				"max_length" => "El maximo de caracteres para la descripción del sitio web es de 255"
				)
			),
		array(
			"field" => "info_autor",
			"label" => "tu nombre",
			"rules" => "trim|required|min_length[10]|max_length[255]",
			"errors" => array(
				"required" => "Por favor debe de ingresar %s",
				"min_length" => "El minimo de caracteres para el autor del sitio web es de 10",
				"max_length" => "El maximo de caracteres para el autor del sitio web es de 255"
				)
			),
		array(
			"field" => "info_tag_sitio",
			"label" => "palabra clave para el sitio web",
			"rules" => "required|min_length[10]|max_length[255]",
			"errors" => array(
				"required" => "Por favor debe de ingresar una %s",
				"min_length" => "El minimo de caracteres para las palabras clave del sitio web es de 10",
				"max_length" => "El maximo de caracteres para las palabras clave del sitio web es de 255"
				)
			)
		),
	"cuentas_usuarios" => array(
		array(
			"field" => "usu_email",
			"label" => "correo electrónico",
			"rules" => "trim|required|min_length[10]|max_length[120]|strip_tags|valid_email",
			"errors" => array(
				"required" => "Por favor debe de ingresar un %s",
				"min_length" => "El minimo de caracteres para el correo electrónico es de  10",
				"max_length" => "El maximo de caracteres para el correo electrónico es de  120",
				"valid_email" => "Debes de ingresar un %s valido"
				)
			),
		array(
			"field" => "usu_clave",
			"label" => "clave de acceso",
			"rules" => "trim|required|min_length[8]|max_length[255]|strip_tags",
			"errors" => array(
				"required" => "Por favor debe de ingresar una %s",
				"min_length" => "El minimo de caracteres para la clave es de  8",
				"max_length" => "El maximo de caracteres para la clave es de  255"
				)
			),
		array(
			"field" => "usu_confirmar_clave",
			"label" => "confirmar clave de acceso",
			"rules" => "trim|required|min_length[8]|max_length[255]|strip_tags|matches[usu_clave]",
			"errors" => array(
				"required" => "Por favor debe de %s",
				"min_length" => "El minimo de caracteres para la clave es de  8",
				"max_length" => "El maximo de caracteres para la clave es de  255",
				"matches" => "Las clave de acceso no son iguales"
				)
			)
		),
	"inicio_sesion" => array(
		array(
			"field" => "usu_email",
			"label" => "correo electrónico",
			"rules" => "trim|required|valid_email|strip_tags",
			"errors" => array(
				"required" => "Por favor debe de ingresar un %s",
				"valid_email" => "Debe de ingresar un %s valido",
				)
			),
		array(
			"field" => "usu_clave",
			"label" => "clave",
			"rules" => "trim|required|strip_tags",
			"errors" => array(
				"required" => "Por favor debe de ingresar una %s",
				)
			)
		)
	);
