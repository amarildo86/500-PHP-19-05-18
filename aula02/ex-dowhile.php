<?php  

//Utilizando a estrutura de repetição DOWHILE, imprima os números de 0 a 10
//Utilizando a estrutura de repetição DOWHILE, imprima os números pares de 0 a 20
//Utilizando a estrutura de repetição DOWHILE, imprima os números ímpares de 0 a 20
//Utilizando a estrutura de repetição DOWHILE, imprima os números míltiplos de 5 de 0 a 50

	$num = 0;
	do {
		echo $num.PHP_EOL;
		$num++;
	} while ($num <= 10);
	echo 'FIM'.PHP_EOL;
	echo '......................'.PHP_EOL;
	$num = 0;
	do {
		if ($num % 2 == 0) {
			echo $num.PHP_EOL;
		}
		$num++;

	} while ($num <= 20);
	echo 'FIM'.PHP_EOL;
	echo '......................'.PHP_EOL;
	$num = 0;
	do {
		if ($num % 2 != 0) {
			echo $num.PHP_EOL;			
		}
		$num++;	
	} while ($num <= 20);
	echo 'FIM'.PHP_EOL;
	echo '......................'.PHP_EOL;
	$num =0;
	do {
		if ($num % 5 == 0) {
			echo $num.PHP_EOL;
		}
		$num++;
	} while ($num <= 50);
	
?>
		

