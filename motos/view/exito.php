<?php if(empty($index_access)) die('ERROR: accede desde index.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vista de exito</title>
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
		
		<h1>EXITO</h1>
		<p><?php echo $mensaje;?></p>
		
		<a class="volver" href="index.php">Inicio</a>
		
		<footer>
			<a href="http://twitter.robertsallent.com">Robert sallent '16</a>
		</footer>
	</body>
</html>