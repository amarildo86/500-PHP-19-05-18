<?php 

	echo '<pre>';
//Array
//[0] = valor
//[1] = valor2

//	$arr = ['valor1', 'valor2'];
//	$arr = array('valor1', 'valor2', 'valor3');
//	$arr[] = 'string';
//	$arr[3] = 123;
//	$arr[3] = 456;

	$arr = ['Amarildo', 31, 'amarildoqueirozm@hotmail.com', 1.77];

//echo $arr não funciona
	print_r($arr); //Funciona
	var_dump($arr); //Funciona

	echo $arr[0] . '<br>';
	echo $arr[1] . '<br>';
	echo $arr[2] . '<br>';

	echo '<hr>';

	for ($i=0; $i <= 3; $i++) { 
		echo $arr[$i] . '<br>';
	}

	echo '<hr>';

	//Array associativo
	$pessoa = [
		'nome' => 'Amarildo',
		//0 => 'Amarildo
		'idade' => 31,
		//1 => 31
		'email' => 'amarildoqueirozm@hotmail.com',
		//2 => 'amarildoqueirozm@hotmail.com'
		'altura' => '1.77'
		//3 => 1.77
	];
	print_r($pessoa);




 ?>