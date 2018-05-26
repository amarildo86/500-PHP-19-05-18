<?php 

//Utilizando a estrutura de repetição FOR, imprima os números de 0 a 10
//Utilizando a estrutura de repetição FOR, imprima os números pares de 0 a 20
//Utilizando a estrutura de repetição FOR, imprima os números ímpares de 0 a 20
//Utilizando a estrutura de repetição FOR, imprima os números míltiplos de 5 de 0 a 50

	for ($i=0; $i < 10 ; $i++) { 
		echo $i . PHP_EOL;
	}
	echo 'FIM' . PHP_EOL;
	echo '.................' . PHP_EOL;

	for ($i=0; $i <= 20 ; $i+= 2) { 
		echo $i . PHP_EOL;
	}
	echo 'FIM' . PHP_EOL;
	echo '.................' . PHP_EOL;
	for ($i=1; $i <= 20 ; $i++ ) { 
		echo $i . PHP_EOL;
	}
	echo 'FIM' . PHP_EOL;
	echo '.................' . PHP_EOL;
	for ($i=1; $i <= 20 ; $i++ ) { 
		echo $i . PHP_EOL;
	}
	echo 'FIM' . PHP_EOL;
	echo '.................' . PHP_EOL;
	for ($i=0; $i <= 50 ; $i+= 5 ) { 
		echo $i . PHP_EOL;
	}

 ?>