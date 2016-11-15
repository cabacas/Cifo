<?php
	//evita el acceso directo al script
	if(empty($index_access)) die('ERROR: accede desde index.php');

	//carga el modelo
	require_once 'model/Moto.php';
	
	//recupera las motos
	$motos = Moto::getMotos();
	
	//carga la vista
	include 'view/motos/lista.php';
?>