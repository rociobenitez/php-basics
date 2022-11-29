<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP - Métodos matemáticos y string</title>
	<style>body{font-family: helvetica, sans-serif;}</style>
</head>
<body>
	<?php 

	// HEREDOC permite hacer concatenaciones complejas

	$texto='TEXTO EN VARIABLE';
	$num=5;

	/*
	echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum." . $texto . ' ' . $num; 

	(Esta forma es más incómoda de trabajar) */

	echo <<<EOD

	<h2>$texto</h2>
	"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
	$num &nbsp; 
	EOD;

	/* &nbsp; --> para que cierre el texto y no tengamos que poner ;
	(porque los interpreta y aparecería en el html) */

	echo '<br><br><hr><br><br><br>';

	echo '<h2>MÉTODOS PARA STRING</h2>';

	$prueba='<h3>Texto de prueba</h3>';
	echo $prueba;
	echo '<b>htmlspecialchars($prueba): </b>';
	echo htmlspecialchars($prueba); // convierte caracteres HTML a string
	echo '<br><hr><br>';

	$prueba='  Texto de prueba  ';
	echo '<b>trim($prueba): </b>';
	echo trim($prueba); // quita espacios por delante y por detrás
	echo '<br><hr><br>';

	$prueba='Texto de prueba';
	echo '<b>strlen($prueba): </b>';
	echo strlen($prueba); // devuelve la longitud de un string
	echo '<br><hr><br>';

	$prueba='Texto de prueba';
	echo '<b>substr($prueba): </b>';
	echo substr($prueba, 3, 10); // devuelve un fragmento de la cadena
	echo '<br><hr><br>';

	$prueba='Texto DE prUeba';
	echo '<b>strtoupper($prueba): </b>';
	echo strtoupper($prueba); // convierte a mayúsculas
	echo '<br><hr><br>';

	$prueba='Texto de prueba';
	echo '<b>strtolower($prueba): </b>';
	echo strtolower($prueba); // convierte a minúsculas
	echo '<br><hr><br>';

	$prueba='Texto de prueba';
	echo '<b>strpos($prueba): </b>';
	echo strpos($prueba,'t'); // devuelve la posición de una letra
	echo '<br><hr><br>';

	$prueba='Texto de prueba';
	echo '<b>trim($prueba): </b>';
	echo '<b>str_replace($prueba): </b>';
	echo str_replace('prueba','<strong>otra palabra</strong>', $prueba); // reemplaza texto en la cadena
	echo '<br><hr><br>';

	$prueba='Texto de prueba';
	echo '<b>str_word_count($prueba): </b>';
	echo str_word_count($prueba); // devuelve nº palabras dentro de un string
	echo '<br><hr><br>';

	$prueba='Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
	echo '<b>wordwrap($prueba): </b>';
	echo wordwrap($prueba,45,'<br>'); // añade un caracter cada x caracteres sin cortar palabras
	echo '<br><hr><br>';

	$prueba='Lorem Ipsum is simply dummy text of the printing and typesetting industry.

	Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
	// echo $prueba;  // de esta forma no se respetan los espacios
	echo '<b>nl2br($prueba): </b>';
	echo nl2br($prueba); // respeta los espacios
	echo '<br><hr><br><br><br>';

	// ===============================================================

	echo '<h2>MÉTODOS MATEMÁTICOS</h2>';

	$num=15.8434567;
	echo '<b>round($num): </b>';
	echo round($num).'<br>';  // redondea un float
	echo '<b>round($num,2): </b>';
	echo round($num,2);       // devuelve el valor redondeado con la precisión especificada
	echo '<br>';

	$num=15.11545774;
	echo '<b>ceil($num): </b>';
	echo ceil($num).'<br>';   // redondea fracciones hacia arriba

	$num=15.9174567;
	echo '<b>floor($num): </b>';
	echo floor($num).'<br>';   // redondea fracciones hacia abajo

	echo '<b>rand(1,10): </b>';
	echo rand(1,10).'<br>';   // genera un nº entero aleatorio entre valores especificados
	echo '<br><hr><br>';

 ?>
</body>
</html>
