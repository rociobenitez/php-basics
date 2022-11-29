<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>body{font-family: helvetica, sans-serif; padding: 2em;}</style>
</head>
<body>
<?php 

	/* Tanto el if como el switch-case funcionan idénticos a javaScript
		 (switch-case está obsoleto en PHP8) */

	/* MATCH --> evalúa condicionales de igualdad estricta 
		
		Se suele utilizar para almacenar un valor en una variable o un return

		SINTAXIS:

			match(nombreVariable){
				datoAComparar=>bloqueInstrucción/es,
				datoAComparar=>bloqueInstrucción/es,
				datoAComparar=>bloqueInstrucción/es,
				datoAComparar=>bloqueInstrucción/es,
				datoAComparar=>bloqueInstrucción/es,
			}
	*/
		function comparar(){
			$a=100;

			$x=10;
			$y=1000;
			$z=100;

			$resultado=match($a){
				$x=>'es igual a x',
				$y=>'es igual a y',
				$z=>'es igual a z',
			};
			echo $resultado;
		};

		comparar();

		echo '<br><br><hr><br>';

		function comparar2(){
			$a=100;

			$x=10;
			$y=100;
			$z=100;

			return match($a){
				$x=>'es igual a x',
				$y=>'es igual a y',
				$z=>'es igual a z',
			};
		};

		echo comparar2();

 ?>	
</body>
</html>