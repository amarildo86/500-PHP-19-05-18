<?php 

	$numeros = [1,2,3,4,5];

	echo '<pre>';
	print_r($numeros);

	echo '<hr>';

	foreach ($numeros as $chave => $valor) {
		echo 'chave ' . $chave . ' - valor ' . $valor . '<br>';
	}
	echo '<hr>';

	foreach ($numeros as $valor) {
		echo 'valor ' . $valor . '<br>';
	}

 ?>