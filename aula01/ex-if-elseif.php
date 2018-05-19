<?php 

	//CLI
	//Nota - Digite sua nota
	//Frequência - Digite sua frequência
	//Se está aprovado
	//Se está em recuperação
	//Se está reprovado
	//Aprovado - nota >= 7 e frequência >=8
	//Recuperação - nota >= 5 ou nota < 7 e frequência >=8
	//Reprovado - nota < 5 ou frequência < 8

	$nota = readline("Digite sua nota :") . PHP_EOL;
	$frequencia = readline("Digite sua frequência : ") . PHP_EOL;

	if ($nota >= 7 && $frequencia >= 8) {
		echo "Você está aprovado" . PHP_EOL;
	}
	else if ($nota > 5 || $nota < 7 && $frequencia >= 8) {
		echo "Você está de recuperação" . PHP_EOL;
	}
	else {
		echo "Você está reprovado" . PHP_EOL;
	}

 ?>