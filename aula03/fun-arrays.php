<?php 

	//Filtrando Array
	echo '<pre>';
	
	print_r(array_filter([1,2,3,4,5],
		function($num) {
			if($num % 2 == 0) {
				return $num;
			}
		}));

	//Quantidade de Valores no Array

	echo '<hr>';
	echo count([true, 'Amarildo', 4]);

	//procura um determinado valor no Array

	$arr = ['Amarildo', 'José', 'Maria'];
	$pos = array_search('Amarildo', $arr);
	echo $pos;
	echo '<br>';

	echo '<hr>';

	//Procura um determinado valor em um array e retorna verdadeiro ou falso

	var_dump(in_array('Amarildo', $arr));
	var_dump(in_array('Maria', $arr));

	echo '<hr>';

	//Procura

	$arr = ['Nome' => 'Amarildo', 'Idade' => 31];

	var_dump(array_key_exists('Nome', $arr));
	var_dump(array_key_exists('Email', $arr));

	echo '<hr>';

	$arr = [1,5,8,3,9,6];
	print_r($arr);
	sort($arr);
	echo '<br>';
	print_r($arr);

	echo '<hr>';

	//Recebe um array e converte para string

	$arr = [2,6,2018];
	echo implode('/', $arr);


	//Recebe uma string e converte para array

	$str = '02/06/2018';
	print_r(explode('/', $str));




 ?>