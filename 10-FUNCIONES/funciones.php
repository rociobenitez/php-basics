<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP - Funciones</title>
	<style>body{font-family: helvetica, sans-serif; padding: 1em;}</style>
</head>
<body>

	<?php 

	/*

	function nombreFuncion ($arg,$arg){
		bloque de instrucciones;
	}

	nombreFuncion($arg,4);

	*/

	echo '<h2>Funciones PHP</h2>';

	/*
		FUNCIONES DE TIPO ESCALAR
		=========================
		Determinamos el tipo de datos que recibe en los argumentos;
			int,float,string,array,bool;

		SINTAXIS:	
			function nombreFuncion(int $num, bool $cosa){
				bloque de instrucciones;
			}
			
			nombreFuncion(4,true);
	*/
		echo '<h4>Funciones tipo escalar:</h4>';

		//declare(strict_types=1);

		function sumar(int $num1,int $num2){
			echo $num1+$num2;
		};

		sumar('2','3');

		echo '<br><br><hr><br>';

	/*
		FUNCIONES DE TIPO DEVOLUCIÓN
		============================
		Determinamos el tipo de dato que devuelve una función;
			int,float,string,array,bool;

		SINTAXIS:
			function nombreFuncion($num, $cosa):int{
				return bloque de instrucciones;
			}
			
			nombreFuncion(4,true);
	*/
		echo '<h4>Funciones tipo devolución:</h4>';


		function mostrarNumero(){
			$numero=30;
			return $numero;
		};

		$numero=mostrarNumero();
		$tipo=gettype($numero);

		echo $numero.' - '.$tipo.'<br>';


		function mostrarNumero2():string{
			$numero='30';
			return $numero;
		};

		$numero=mostrarNumero2();
		$tipo=gettype($numero);

		echo $numero.' - '.$tipo;

		echo '<br><br><hr><br>';


	/*
		FUNCIONES ANÓNIMAS
		===================
	*/
		echo '<h4>Funciones anónimas:</h4>';

		$nombre='Rocío';
		$mostrarNombre=function($nombre){
			echo $nombre . '<br>';
		};
		$mostrarNombre($nombre);

		/*
		$curso='PINTURA';
		$mostrarCurso = function() use($curso){
			echo $curso;
		};
		$mostrarCurso();
		*/

		$curso=function(){
			return 'CSS';
		};
		$mostrarCurso=function(int $precio) use($curso){
			echo $curso().' - '.$precio;
		};
		$mostrarCurso(3);

		echo '<br><br><hr><br>';

		/* Las funciones anónimas tienen una propiedad (use). Esta propiedad hace que herede variables de un ámbito padre  */

 ?>

	
</body>
</html>
