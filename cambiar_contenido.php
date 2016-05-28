<?php
	$i=1; 	
	$contenido = array();
	$archivo = fopen('leer.php','r');
	while ($linea = fgets($archivo))
	{
	  if ($i != 2 and $i != 4)  
	  {
	    $contenido[] = $linea; 
	  }elseif ($i == 2) {
	  	$contenido[] = '	$host = "'."localhost".'";'.chr(10);
	  }elseif ($i == 4) {
	  	$contenido[] = '	$password = "'."123".'";'.chr(10);
	  }
	  $i++;
	}
	fclose($archivo);
	$contenido = implode($contenido, '');
	file_put_contents('leer.php', $contenido);
?>