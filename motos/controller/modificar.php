<?php
	//evita el acceso directo al script
	if(empty($index_access)) die('ERROR: accede desde index.php');

	//si no me llega el parámetro (error)
	if(empty($_GET['parametro']))
		throw new Exception('No se indicó la moto a modificar');
	
	//recuperar la moto
	require_once 'model/Moto.php';

	$id = $_GET['parametro'];
	$moto = Moto::getMoto($id);

	//si no existe la moto (error)
	if(empty($moto))
		throw new Exception('No se encontró la moto a modificar');


	//si no llegan los datos del formulario
	if(empty($_POST['modificar'])){
		//poner el formulario
		include 'view/motos/modificar.php';
	
	}else{
		//si llegan los datos del formulario, se sustituyen los datos de 
		//la moto con los que llegan desde el formulario
		$moto->matricula = $_POST['matricula'];
		$moto->marca = $_POST['marca'];
		$moto->modelo = $_POST['modelo'];
		$moto->color = $_POST['color'];
		
		if(!$moto->modificar())
			throw new Exception('No se pudo modificar la moto');
		
		//cargar la vista de éxito
		$mensaje = "La moto $moto->matricula $moto->marca $moto->modelo se guardó correctamente.";
		include 'view/exito.php';
		
		//OPCIONAL: no cargar la vista de éxito sino ir al listado
		//include 'controller/listar.php';
	}
?>