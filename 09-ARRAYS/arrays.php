<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP - Array</title>
	<style>body{font-family: helvetica, sans-serif; padding: 1em;}</style>

</head>
<body>
	<?php 
	
	// https://www.php.net/manual/en/function.array

	/* ARRAYS INDEXADOS

		$nombreArray=array('valor1','valor2',......);
		$nombreArray=['valor1','valor2',......];

		echo $nombreArray[0];
	*/

	$arrayColores=['rojo','verde','azul'];
	print_r($arrayColores);
	echo '<br>';
	var_dump($arrayColores);  // da más información
	echo '<br><br><hr><br>';

	/* RECORRER UN ARRAY */
	foreach($arrayColores as $color){
		echo $color . '<br>';
	};

	echo '<br><hr><br>';

	/* CONTAR LOS ELEMENTOS DE UN ARRAY */

	echo 'Total Elementos: '.count($arrayColores) . '<br>';
	echo 'Total Elementos: '.sizeof($arrayColores) . '<br>';

	echo '<br><hr><br>';

	/* VALIDAR UN ARRAY VACÍO */

	// $arrayNumeros=[];
	$arrayNumeros=[2,4,5,6];

	if(empty($arrayNumeros)){
		echo 'Esta vacío';
	}else{
		echo 'NO está vacío';
	};

	echo '<br><br><hr><br>';


	// ======================================================

	/* ARRAYS ASOCIATIVOS
	
		SINTAXIS:

		  $nombreArray=[
			'llave'=>'valor',
			'llave'=>'valor',
			'llave'=>'valor',
			'llave'=>'valor'
		  ];
	*/

	$arrayAlumno=[
		'nombre'=> 'Rocío',
		'correo'=> 'rocio@rocio.es',
		'curso'=> 'php'
	];

	var_dump($arrayAlumno);
	echo '<br>';

	echo $arrayAlumno['nombre'];
	$arrayAlumno['nombre']='Noa';
	echo $arrayAlumno['nombre'];
	$arrayAlumno['edad']=20;
	echo '<br>';
	var_dump($arrayAlumno);
	echo '<br>';

	/* RECORRER UN ARRAY ASOCIATIVOS */

	foreach ($arrayAlumno as $key => $value) {
		echo $key . ' - ' . $value . '<br>';
	};

	echo '<br>';

	/* ALMACENAR LLAVES O VALORES EN OTRO ARRAY */

	$llaves=array_keys($arrayAlumno);
	print_r($llaves);

	echo '<br>';

	$valores=array_values($arrayAlumno);
	print_r($valores);

	echo '<br><br><hr><br>';


	// ======================================================

	/* ARRAYS MULTIDIPENSIONALES */

	$arrayAlumnos=[['pepe','pepe@pepe.es'],['ana','ana@ana.es'],['bea','bea@bea.es']];

	var_dump($arrayAlumnos);
	echo '<br><br><hr><br>';


	// ======================================================

	/* ARRAYS ASOCIATIVOS MULTIDIPENSIONALES */

	$arrayAlumnos2=[
		'nombres'=>[
			'pepe',
			'ana',
			'luis'
		],
		'cursos'=>[
			'css',
			'php',
			'JS'
		]
	];

	var_dump($arrayAlumnos2); echo '<br>';
	echo $arrayAlumnos2['nombres'][2];

	echo '<br><br><hr><br>';

 ?>

</body>
</html>
