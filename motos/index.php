<?php
/* MODEL VIEW CONTROLLER - NANO FRAMEWORK
 * By RobS@juegayestudia
 * http://twitter.com/robertsallent
 *
 * INDEX.PHP
 *
 * Fichero index.php por el que pasan todas las peticiones.
 * 
 * Se encarga de cargar los recursos necesarios y el
 * controlador frontal.
 * 
 */

	//comprobará que no accedamos a los scripts
	//directamente sin pasar por index.php
	$index_access = true;

	//carga el fichero config
	require_once 'config/config.php';
	
	//carga la librería para conectar de forma simple a la BDD
	require_once 'libraries/Database.php';
	
	//carga el controlador frontal
	require_once 'controller/frontcontroller.php';
?>