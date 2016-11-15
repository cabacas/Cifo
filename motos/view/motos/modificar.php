<?php if(empty($index_access)) die('ERROR: accede desde index.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Modificar moto <?php echo $moto->matricula;?></title>
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
		
		<h1>Modificar la moto <?php echo $moto->matricula;?></h1>
		<h2><?php echo $moto->marca.' '.$moto->modelo;?></h2>
		
		<form method="post">
			<label>Matrícula</label>
			<input type="text" maxlength="7" name="matricula"  
			pattern="\d{4}[A-Z]{3}" title="cuatro números y tres letras"
			required="required"	value="<?php echo $moto->matricula;?>" /><br>
			
			<label>Marca</label>
			<input type="text" name="marca" required="required"
				value="<?php echo $moto->marca;?>" /><br>
			
			<label>Modelo</label>
			<input type="text" name="modelo" required="required"
				value="<?php echo $moto->modelo;?>" /><br>
			
			<label>Color</label>
			<input type="color" name="color" 
				value="<?php echo $moto->color;?>" /><br>
			
			<input type="submit" name="modificar" value="Guardar cambios" />
			<input type="reset" value="Reset"/>
		</form>

		<a class="volver" href="index.php?operacion=listar">Volver al listado</a>
		
		<footer>
			<a href="http://twitter.robertsallent.com">Robert sallent '16</a>
		</footer>
	</body>
</html>