<?php 

	$nombre='Rocío'; // $ tanto para declarar como para instanciar una variable

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP - Introducción</title>

	<style>
		body {
			background-color: <?php echo 'lightblue;' ?>;
			font-family: helvetica, arial, sans-serif;
		}
	</style>
</head>
<body>
	
	<?php

		echo '<h1>Introducción a php</h1>';  
		echo 'Hola ' . $nombre ;             // en php la concatenación se hace con el signo del punto (.)
		echo '<br>';
		echo 'Hola ' . $nombre . '<br>';
		echo 'Hola $nombre <br>' ;
		echo "Hola $nombre <br>" ;
		print_r($nombre);                   // mostrar por pantalla

		// comentario en una línea
		/* comentarios multilínea */
		# comentario en una línea

	?>

	<script>
		<?php echo alert('Hola Mundo') ?>
	</script>

</body>
</html>

