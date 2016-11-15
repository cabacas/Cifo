<?php
/* MODEL VIEW CONTROLLER - NANO FRAMEWORK
 * By RobS@juegayestudia 
 * http://twitter.com/robertsallent
 * 
 * CONTROLADOR POR DEFECTO  
*/
	//evita el acceso directo al script
	if(empty($index_access)) die('ERROR: accede desde index.php');

	//carga la vista de portada
	include 'view/portada.php';
?>