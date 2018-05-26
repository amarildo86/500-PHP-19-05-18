<?php 

//
	$pessoas = [
		0 => [
			'nome' => 'Amarildo',
			'idade' => 31
		],
		1 => [
			'nome' => 'José',
			'idade' => 65
		],
		2 => [
			'nome' => 'Maria',
			'idade' => 22
		]
	];

	echo '<pre>';
	print_r($pessoas);

	echo $pessoas[1]['nome'] . '<br>';
	echo $pessoas[1]['idade'] . '<br>';

 ?>