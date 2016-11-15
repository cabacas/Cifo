<?php
/* MODEL VIEW CONTROLLER - NANO FRAMEWORK
 * By RobS@juegayestudia 
 * http://twitter.com/robertsallent
 * 
 * FICHERO DE CONFIGURACIÓN
 * 
 */

	//evita el acceso directo al script
	if(empty($index_access)) die('ERROR: accede desde index.php');

	//definición de las constantes para la conexión con la BDD
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','usuarim');
	define('DB_NAME','motos');
	define('DB_CHARSET','utf8');
?>