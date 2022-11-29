<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP - Tipos de datos</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: monospace;
			text-align: center;
			margin-top: 2em;
			font-size: 1.3em;
		}
	</style>	
</head>
<body>
	<?php 

		/* string */
		$nombre = 'Rocío';
		echo $nombre . ' - ';
		echo gettype($nombre);
		echo '<br>';

		/* integer */
		$edad = 29;
		echo $edad . ' - ';
		echo gettype($edad);
		echo '<br>';

		/* double */
		$altura = 1.67;
		echo $altura . ' - ';
		echo gettype($altura);
		echo '<br>';


		/* TODOS LOS TIPOS DE DATOS:
		https://www.php.net/manual/es/language.types.php */
		
	 ?>
</body>
</html>
