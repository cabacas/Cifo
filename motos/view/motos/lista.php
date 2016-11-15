<?php if(empty($index_access)) die('ERROR: accede desde index.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Listado de motos</title>
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
		
		<h1>Listado de motos</h1>
		<table>
			<tr>
				<th>Matrícula</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Color</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		<?php 
			foreach($motos as $moto){
				echo "<tr>";
				echo "<td>$moto->matricula</td>";
				echo "<td>$moto->marca</td>";
				echo "<td>$moto->modelo</td>";
				echo "<td style='background-color: $moto->color;'>$moto->color</td>";
				echo "<td><a href='index.php?operacion=ver&parametro=$moto->id'>";
				echo "<img class='boton' src='images/buttons/ver.png' alt='ver moto'>";
				echo "</a></td>";
				echo "<td><a href='index.php?operacion=modificar&parametro=$moto->id'>";
				echo "<img class='boton' src='images/buttons/editar.png' alt='editar moto'>";
				echo "</a></td>";
				echo "<td><a href='index.php?operacion=borrar&parametro=$moto->id'>";
				echo "<img class='boton' src='images/buttons/borrar.png' alt='borrar moto'>";
				echo "</a></td>";
				echo "</tr>";
			}
		?>
		</table>

		<a class="volver" href="index.php">Inicio</a>
		
		<footer>
			<a href="http://twitter.robertsallent.com">Robert sallent '16</a>
		</footer>
		
	</body>
</html>