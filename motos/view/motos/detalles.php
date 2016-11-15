<?php if(empty($index_access)) die('ERROR: accede desde index.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles de la moto <?php echo $moto->matricula;?></title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	</head>
	<body>
		<header>
			<h1>Motos Nano Framework</h1>
		</header>
		
		<ul class="menu">
			<li><a href="index.php?operacion=listar">Listar motos</a></li>
			<li><a href="index.php?operacion=nueva">Nueva moto</a></li>
		</ul>
		
		<h1>Detalles de la moto <?php echo $moto->matricula;?></h1>
		<h2><?php echo $moto->marca.' '.$moto->modelo;?></h2>
		
		<p><b>Matrícula: </b><?php echo $moto->matricula;?></p>
		<p><b>Marca: </b><?php echo $moto->marca;?></p>
		<p><b>Modelo: </b><?php echo $moto->modelo;?></p>
		<p><b>Color: </b>
			<span class="democolor" style="background-color: <?php echo $moto->color;?>;"><?php echo $moto->color;?></span>
		</p>

		<a class="volver" href="index.php?operacion=listar">Volver al listado</a>
		
		<footer>
			<a href="http://twitter.robertsallent.com">Robert sallent '16</a>
		</footer>
	</body>
</html>