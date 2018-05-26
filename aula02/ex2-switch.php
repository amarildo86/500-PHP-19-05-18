<?php 

/*	Vamos ler dois números
	Vamos ler uma opção
	caso opção 1: somar os dois números e mostrar o resultado
	caso opção 2: subtrair os dois números e mostrar o resultado
	caso opção 3: multiplicar os dois números e mostrar o resultado
	caso opção 4: dividir os dois números e mostrar o resultado
*/

	$num1 = readline('Digite o primeiro número: ');
	$num2 = readline('Digite o segundo número: ');
	echo '.............' . PHP_EOL;
	echo '1 - Soma' . PHP_EOL;
	echo '2 - Subtração' . PHP_EOL;
	echo '3 - Multiplicação' . PHP_EOL;
	echo '4 - Divisão' . PHP_EOL;
	$opcao = readline('Digite a opção: ');

	switch ($opcao) {
		case 1:
			echo 'A soma dos números digitados é: ', $num1 + $num2 . PHP_EOL;
			break;
		case 2:
			echo 'A subtração dos números digitados é: ', $num1 - $num2 . PHP_EOL;
			break;
		case 3:
			echo 'A multiṕlicação dos números digitados é: ', $num1 * $num2 . PHP_EOL;
			break;
		case 4:
			echo 'A divisão dos números digitados é: ', $num1 / $num2 . PHP_EOL;
			break;
		default:
			echo 'Inválido' . PHP_EOL;;
			break;
	}


 ?>