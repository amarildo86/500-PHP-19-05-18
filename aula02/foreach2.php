<?php 

	echo '<pre>';

	$pessoa = [
		'nome' => 'Amarildo',
		'idade' => 31,
		'email' => 'amarildoqueirozm@hotmail.com',
		'altura' => 1.77
	];

	print_r($pessoa);

	echo '<hr>';

	foreach ($pessoa as $chave => $valor) {
		echo 'chave ' . $chave . ' - valor ' . $valor ; '<br>';
	}

	echo '<hr>';

	foreach ($pessoa as $valor) {
		echo 'valor ' . $valor . '<br>';
	}

 ?>