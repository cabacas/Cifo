<?php		
/* MODEL VIEW CONTROLLER - NANO FRAMEWORK
 * By RobS@juegayestudia
 * http://twitter.com/robertsallent
 *
 * CLASE DE CONEXIÓN CON LA BDD
 * 
 * Esta herramienta simplifica el proceso de conexión con la BDD.
 * 
 * El único método público es get(), que se usa así:
 * $conexion = Database::get();
 * 
 * establece o recupera la conexión con la BDD, retornando el 
 * objeto mysqli. 
 *
 */

//evita el acceso directo al script
if(empty($index_access)) die('ERROR: accede desde index.php');


class Database{	
    //patrón singleton.
	private static $conexion = null;	
	
	//método que establece o recupera la conexión.
	public static function get(){	
		//notifica los Warnings como errores.
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		//si no se había conectado antes...
		if(empty(self::$conexion)){	
			//conecta con la BDD a partir de las constantes definidas en el 
			//fichero de configuración y guarda el objeto mysqli en la propiedad
			//estática $conexion
			self::$conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			
			//finaliza la ejecución si no se pudo conectar con la BDD
			if(self::$conexion->errno)
				die('ERROR en la conexión con la BDD: '.self::$conexion->error);

			//establece el charset a UTF8
			self::$conexion->set_charset(DB_CHARSET);
		}
		//retorna el objeto mysqli con los datos de la conexión
		return self::$conexion;
	}	
}
?>