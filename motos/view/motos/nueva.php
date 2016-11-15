<?php if(empty($index_access)) die('ERROR: accede desde index.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Nueva moto</title>
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
		
		<h1>Nueva moto</h1>
		
		<form method="post">
			<label>Matrícula</label>
			<input type="text" maxlength="7" name="matricula" 
			pattern="\d{4}[A-Z]{3}" title="cuatro números y tres letras"
			required="required"/><br>
			
			<label>Marca</label>
			<input type="text" name="marca" required="required"/><br>
			
			<label>Modelo</label>
			<input type="text" name="modelo" required="required"/><br>
			
			<label>Color</label>
			<input type="color" name="color" /><br>
			
			<input type="submit" name="guardar" value="Guardar" />
		</form>

		<a class="volver" href="index.php">Inicio</a>
		
		<footer>
			<a href="http://twitter.robertsallent.com">Robert sallent '16</a>
		</footer>
	</body>
</html>