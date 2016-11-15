<?php
/* MODEL VIEW CONTROLLER - NANO FRAMEWORK
 * By RobS@juegayestudia 
 * http://twitter.com/robertsallent
 * 
 * CONTROLADOR FRONTAL
 * 
 * Se encarga de gestionar las peticiones del usuario e invocar al 
 * controlador adecuado.
 * 
 * LAS PETICIONES DEBEN TENER LA FORMA
 * index.php?operacion=ver&parametro=1
 * 
 * Lo que implicaría ver los detalles del producto con id 1
 * 
 * En este ejemplo el frontcontroller llamará al controlador ver.php que debe
 * estar ubicado dentro de la carpeta "controller".
 * 
 * Para simplificar, cada operación se implementa en un script.
 * 
 * También gestiona los errores, cargando la vista de error ante cualquier
 * excepción que se produzca.
 */

	//evita el acceso directo al script
	if(empty($index_access)) die('ERROR: accede desde index.php');

	try{
		//recuperar la operación (el controlador-script por defecto será "portada")
		$operacion = empty($_GET['operacion'])? 'portada' : $_GET['operacion'];
		
		//comprobar si existe el controlador (script)
		if(!is_readable('controller/'.$operacion.'.php'))
			throw new Exception('no existe la operación '.$operacion);
		
		//cargar el controlador (script)
		require 'controller/'.$operacion.'.php';
		
	//Si se produce algún tipo de error	
	}catch(Exception $e){
		//preparar el mensaje de error
		$mensaje = 'ERROR: '.$e->getMessage();
		
		//cargar la vista de error
		include 'view/error.php';
	}	
?>