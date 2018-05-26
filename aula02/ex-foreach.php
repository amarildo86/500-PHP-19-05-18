<?php 

//Array $pessoa -> Nome, Idade e Email
//Exibir na tela o conteúdo de cada informação o exemplo;
//Meu nomé é $$$
//Tenho $$$ anos
//Meu email é $$$

//Array Pessoas onde teremos 3 pessoas
//Cada pessoa possui nome, idade e email
//Exibir na tela o conteúdo de cada informação seguindo o exepmlo;

//Meu nomke é $$$
//Tenho $$$ anos
//Meu email é $$$

	echo '<pre>';
	$pessoa = [
		'nome' => 'Amarildo',
		'idade' => 31,
		'email' => 'amarildoqueirozm@hotmail.com'
	];

	echo $pessoa['nome'].'<br>';
	echo $pessoa['idade'].'<br>';
	echo $pessoa['email'].'<br>';

	echo '<hr>';

	$pessoas = [
		0 => [
			'nome' => 'Amarildo',
			'idade' => 31,
			'email' => 'amarildoqueirozm@hotmail.com'
		],
		1 => [
			'nome' => 'Rafaela',
			'idade' => 22,
			'email' => 'rafaela@hotmail.com'
		],
		2 => [
			'nome' => 'Bia',
			'idade' => 29,
			'email' => 'bia@hotmail.com'
		]
	];

	foreach ($pessoas as $pessoa) {
		echo $pessoa['nome'].'<br>';
		echo $pessoa['idade'].'<br>';
		echo $pessoa['email'].'<br>';
	}


 ?>