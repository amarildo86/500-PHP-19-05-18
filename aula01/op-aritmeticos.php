<?php 

	$num1 = readline('Digite o primeiro numero: ');
	$num2 = readline('Digite o segundo numero: ');

	//Operacões
	$adic = $num1 + $num2;
	$subt = $num1 - $num2;
	$mult = $num1 * $num2;
	$divi = $num1 / $num2;
	$modu = $num1 % $num2;

	echo "Adição: " . $adic . PHP_EOL;
	echo "Subtração: " . $subt . PHP_EOL;
	echo "Multiplicação: " . $mult . PHP_EOL;
	echo "Divisão: " . $divi . PHP_EOL;
	echo "Módulo: " . $modu . PHP_EOL;

 ?>