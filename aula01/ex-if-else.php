<?php 

	//CLI
	// Receber um idade
	// Exibir você é maior de idade
	//Senão
	//Exibir você é menor de idade

	
	$idade = readline("Digite sua idade: ") . PHP_EOL;

	if ($idade < 18) {
		echo "Você é menor de idade." . PHP_EOL;
	}
	else {
		echo "Você é maior de idade." . PHP_EOL;
	}

 ?>