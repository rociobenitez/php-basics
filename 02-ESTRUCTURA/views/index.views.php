<?php

// Include --> NO interrumpe la ejecución del programa
include 'templates/header.php';

// Requiere --> SÍ interrumpe la ejecución del programa
// require 'templates/header.php'

/* include_once y require_one comprueba si ya está incrustado,
       (verifica si el archivo ya ha sido incluido)
si ya lo está no lo integra de nuevo; si no está lo incluye. */

?>

	<main class="container text-center" style="height: 63vh;">
		<?php echo "<h2>¡Hola " . $nombre . "! 👋🏼</h2><br>"?>
		<a href="servicios.php" class="btn btn-dark mt-4">Ir a servicios</a>
	</main>

<?php include 'templates/footer.php' ?>