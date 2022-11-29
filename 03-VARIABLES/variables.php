<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP - Variables</title>

	<style>
	 	body {
	 		font-family: monospace;
	 	}
	 </style>
</head>
<body>

<?php 

// $nombreVariable='valor';

	$nombre='Rocío';

	// SABER SI UNA VARIABLE ESTÁ SETEADA
	//	    isset(nombreVariable);

	if(isset($nombre)){
		echo 'sí está seteada';
	}else{
		echo 'no está seteada';
	};

	echo '<br><br><hr><br>';

 ?>

 <!-- SCOPE DE LAS VARIBLES -->

 <?php 

 	echo '<h2>VARIABLES LOCALES</h2>'; // Las variables en php por defecto son locales

 	$num1 = 5;

 	function sumar(){
 		$num2 = 4;
 		$num3 = 4;

 		echo $num2 + $num3;
 		// echo $num1;  --> Esto me daría un error porque no es global
 	};

 	echo $num1;
 	// echo $num2;  --> Esto me daría un error porque está declarada dentro de la función
 	sumar();

 	echo '<br><br><hr><br>';


 	// =========================================================


 	echo '<h2>VARIABLES ESTÁTICAS</h2>';

 	function sinStatic(){
 		$num4 = 3;
 		echo $num4 . '<br>';
 		$num4 = $num4 + 1; 
 	};

 	echo '<p>Sin Static:</p>';
 	sinStatic();
 	sinStatic();
 	sinStatic();

 	/* De esta forma se muestra num4 en 3, se incrementa en uno (no se muestra)
 	pero cuando vuelve a entrar en la función por la segunda llamada a la función,
 	se inicializa otra vez en 3 (y se vuelve a mostrar en 3); y así sucesivamente */

 	function conStatic(){
 		static $num4 = 3;
 		echo $num4 . '<br>';
 		$num4=$num4 + 1;
 	};

 	echo '<p>Con Static:</p>';
 	conStatic();
 	conStatic();
 	conStatic();

 	// Con estatic si mantiene el valor 

 	echo '<br><hr><br>';


 	// =========================================================


	echo '<h2>VARIABLES GLOBALES</h2>';

	/*
	$a=1;
	$b=4;

	function multiplicar(){
		$c = $a + $b;
		// echo $c --> Error
	};

	multiplicar();
	// echo $c --> Error
	
	*/

	// Haremos lo siguiente:

	$a=1;
	$b=4;

	function multiplicar(){
		global $a,$b,$c;
		$c = $a + $b;
	};

	multiplicar();
	echo $c;

	echo '<br><br><hr><br>';


 	// =========================================================


	echo '<h2>VARIABLES SUPERGLOBALES</h2>';

	/* Las variables superglobales podemos
	invocarlas desde cualquier lugar,
	y devuelven un array asociativo */

	$x = 10;
	$y = 2;
	function dividir(){
		$GLOBALS['z'] = $GLOBALS['x']/$GLOBALS['y'];
	};

	dividir();
	echo $GLOBALS['z'];

	//var_dump($_SERVER);
	var_dump($GLOBALS);

	echo '<br><br><hr><br>';

 ?>

</body>
</html>
