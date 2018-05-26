<?php 

//SWITCH

	$op = readline('Digite uma opção: ');

/*

	switch ($op) {
		case 1:
			echo 'Você digitou a opção 1' . PHP_EOL;
			
		case 2:
			echo 'Você digitou a opção 2' . PHP_EOL;
			break;

		case 3:
			echo 'Você digitou a opção 3' . PHP_EOL;
			break;

		default:
			echo 'Opção inválida' . PHP_EOL;
			break;
	}
*/

	switch(true) {
		case($op > 0 && $op < 5):
			echo 'Seu número está entre 0 e 5' . PHP_EOL;
			break;
		case($op > 5 && $op < 10):
			echo 'Seu número está entre 5 e 10' . PHP_EOL;
			break;
		case($op > 10 && $op < 15):
			echo 'Seu número está entre 10 e 15' . PHP_EOL;
			break;
		default:
			echo 'Opção inválida' . PHP_EOL;
			break;

	}

 ?>