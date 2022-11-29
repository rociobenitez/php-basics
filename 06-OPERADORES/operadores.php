<!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 	<style>
 		body { font-family: monospace; font-size: 1.1em; }
 		h2 { font-family: helvetica, sans-serif; }
 	</style>
 </head>
 <body>

 	<?php 
	 	// include '../../errores.php';
	?>

 	<h2>OPERADORES ARITMETICOS</h2>

 	<ul>
 		<li>$a + $b	 => Suma de $a y $b.</li>
		<li>$a - $b	 => Resta de $a y $b.</li>
		<li>$a * $b	 => Multiplicación	de $a y $b.</li>
		<li>$a / $b	 => División	de $a y $b.</li>
		<li>$a % $b	 => Módulo	Resto de $a dividido por $b.</li>
		<li>$a ** $b => Exponenciación	Resultado de elevar $a a la potencia $bésima </li>
		
 	</ul>
	<div style="background-color: lightblue; padding: 2em 1em;">
	 	<?php 


			$num=5.5;
			// echo gettype($num );
			// echo gettype('numero '.$num );

			// echo ($num . ' numero' );

				// OPERADORES ARITMETICOS

				$num1 = 5;
				$num2 = 2;

				echo ("SUMA => " . ($num1 + $num2) .'<br>');
				echo ("RESTA => " . ($num1 - $num2) .'<br>');
				echo ("DIVISIÓN => " . ($num1 / $num2) .'<br>');
				echo ("MULTIPLICACIÓN => " . ($num1 * $num2) .'<br>');
				echo ("MÓDULO => " . ($num1 % $num2) .'<br>');
				echo ("EXPONENCIACIÓN => " . ($num1 ** $num2) .'<br>');

		?>
 	</div>

	<?php echo '<br><br><hr><br>'; ?>			

 	<h2>OPERADORES DE ASIGNACIÓN</h2>

 	<ul>
 		<li>$a = 3</li>
		<li>$a +=5	 => Establece a en 8 ($a=$a+5)</li>
		<li>$b = 'texto'</li>
		<li>$b .= 'mas'	 => Establece $b en 'texto más' igual que $b=$b . "Más"</li>
 	</ul>

	<div style="background-color: lightblue; padding: 2em 1em;">
	<?php 

		$num1 = 5;
		$num1 += 2;
		echo $num1 .'<br>';

		$texto='texto';
		$texto.=' mas';
		echo '<br>Concatenar texto: '. $texto;

	?>	
	</div>	

	<?php echo '<br><br><hr><br>'; ?>

 	<h2>OPERADORES RELACIONALES</h2>

 	<ul>
 		<li>$a == $b	Igual	TRUE si $a es igual a $b después de la manipulación de tipos.</li>
		<li>$a === $b	Idéntico	TRUE si $a es igual a $b, y son del mismo tipo.</li>
		<li>$a != $b	Diferente	TRUE si $a no es igual a $b </li>
		<li>$a <> $b	Diferente	TRUE si $a no es igual a $b </li>
		<li>$a !== $b	No idéntico	TRUE si $a no es igual a $b, o si no son del mismo tipo.</li>
		<li>$a < $b	Menor que	TRUE si $a es estrictamente menor que $b.</li>
		<li>$a > $b	Mayor que	TRUE si $a es estrictamente mayor que $b.</li>
		<li>$a <= $b	Menor o igual que	TRUE si $a es menor o igual que $b.</li>
		<li>$a >= $b	Mayor o igual que	TRUE si $a es mayor o igual que $b.</li>
 	</ul>
	<div>
	 	<?php 

		?>
 	</div>

	<?php echo '<br><br><hr><br>'; ?>

 	<h2>OPERADORES  LÓGICOS</h2>

 	<ul>
 		<li>&& - AND   =>las 2 se tienen que cumplir</li>
		<li>|| - OR    => se tiene que cumplir al menos una</li>
		<li>XOR 	   => evalua que se cumpla solo una </li>	
 	</ul>
	<div style="background-color: lightblue; padding: 2em 1em;">
	 <?php 
	 	$a=true;
	 	$b=true;

	 	echo ($a==true && $b==true) ?'Se cumple' :' NO Se cumple';
	 	echo '<br>';
	 	echo ($a==false || $b==false) ?'Se cumple' :' NO Se cumple';
	 	echo '<br>';
	 	echo ($a==false XOR $b==true) ?'Se cumple' :' NO Se cumple';
	 	echo '<br>';
	?>
 	</div>

	<?php echo '<br><br><hr><br>'; ?>

 	<h2>OPERADORES NAVE ESPACIAL <em>(spaceship operator)</em></h2>
 	<p><strong>Es un operador relacional</strong></p>
 	<p>Permite programar algoritmos de programación propios</p>
 	<p><strong>$a <=> $b</strong></p>
 	<ul>
 		<li>Devuelve 1 si $a es mayor que $b </li>
 		<li>Devuelve 0 si $a y $b  son iguales</li>
 		<li>Devuelve -1 si $a es menor que $b </li>
 	</ul>
	<div style="background-color: lightblue; padding: 2em 1em;">
	 <?php 

	 	//COMPARAMOS SI ES MENOR IGUAL O MAYOR
	 	echo '1 <=> 1: ';
	 	echo 1 <=> 1; //ESTO AHORA DEVUELVE 0
	 	echo'<br>'; 
	 	echo '1 <=> 3: ';
	 	echo 1 <=> 3; //ESTO AHORA DEVUELVE -1
	 	echo'<br>'; 
	 	echo '4 <=> 3: ';
	 	echo 4 <=> 3; //ESTO AHORA DEVUELVE 1
	 	echo'<br>'; 

	?>
 	</div>
 </body>
 </html>





