<?php 

//Utilizando a estrutura de repetição WHILE, imprima os números de 0 a 10
//Utilizando a estrutura de repetição WHILE, imprima os números pares de 0 a 20
//Utilizando a estrutura de repetição WHILE, imprima os números ímpares de 0 a 20
//Utilizando a estrutura de repetição WHILE, imprima os números míltiplos de 5 de 0 a 50
	
	$num = 0;
	while ($num <= 10) {
		echo $num . PHP_EOL;
		$num++;
	}
	echo 'FIM' . PHP_EOL;
	echo '......................' . PHP_EOL;
	$num = 0;
	while ($num <= 20){
		if ($num % 2 == 0) {
			echo $num . PHP_EOL;
		}
		$num++;
	}
	echo 'FIM' . PHP_EOL;
	echo '......................' . PHP_EOL;
	$num = 0;
	while ($num <= 20){
		if ($num % 2 !=0) {
			echo $num . PHP_EOL;
		}
		$num++;
	}
	echo 'FIM' . PHP_EOL;
	echo '......................' . PHP_EOL;
	$num = 0;
	while ($num <= 50){
		if ($num % 5 == 0) {
			echo $num . PHP_EOL;
		}
		$num++;
	}

 ?>