<?php 

//Ler informações de uma pessoa
//Usando Array numérico e usando Array associativo
//Armazenar as informações em um Array
//Exibir as informações vindas do array
//Nome, idade, email, trabalho;

	$arr[0] = readline('Digite seu nome: ').PHP_EOL;
	$arr[1] = readline('Digite sua idade: ').PHP_EOL;
	$arr[2] = readline('Digite seu email: ').PHP_EOL;
	$arr[3] = readline('Digite sua profissão: ').PHP_EOL;

	for ($i=0; $i <4 ; $i++) { 
		echo $arr[$i];
	}
	echo '......................'.PHP_EOL;

	$arr = [
		'nome' => readline('Digite seu nome: '),
		'idade' => readline('Digite sua idade: '),
		'email' => readline('Digite seu email: '),
		'profissao' => readline('Digite sua profissao: ')
	];
	print_r($arr);


 ?>