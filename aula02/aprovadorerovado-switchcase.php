<?php 

	$nota = readline('Digite sua nota: ') . PHP_EOL;
	$frequencia = readline('Digite sua frequência: ') . PHP_EOL;

	switch (true) {
		case ($nota >= 7 && $frequencia >= 8):
			echo 'Você está aprovado' . PHP_EOL;
			break;
		case ($nota >= 5 && $frequencia >= 8):
			echo 'Você está de recuperação' . PHP_EOL;
			break;
		default:
			echo 'Você está reprovado' . PHP_EOL;
			break;
	}


 ?>