<?php 

	//Verifica se a variavel está setada
	
	echo '<pre>';
	
	$nome = '';
	if (isset($nome)){
		echo 'Nome existe';
	}
	else {
		echo 'Nome não existe';
	}

	echo '<br>';

	$arr = ['nome' => 'Amarildo'];

	if (isset($arr['idade'])) {
		echo 'Existe o indice idade';
	}
	else {
		echo 'Não existe o indice idade';
	}

	echo '<hr>';

	//Destroi variavel

	$var = 'asd';
	unset($var);
	echo (isset($var)) ? 'existe' : 'Não existe';

	echo '<hr>';

	//Verifica se é vazio

	$var = '';
	echo empty($var) ? 'Vazio' : 'Não';
	echo '<br>';

	//Verifica se $var é de um tipo especifico

	if (!is_array($var)){
		echo 'Não é uma array';
	}
	echo '<hr>';

	//Serializar var

	$arr = [
			'nome' => 'Lucas',
			'emails' => [ 
			'lucas@lucas.com',
			'adm@lucas.com'
			]
	];

	$str = serialize($arr);
	echo $str;

	echo '<br>';
	print_r(unserialize($str));

	echo '<hr>';

	//Função printf

	$str = 'Olá meu nome é %s';
	printf($str, 'Lucas');

	echo '<hr>';s

	//Função SpecialChars
	echo htmlspecialchars('<hr>');

	//echo "<script>alert('Você foi invadido')</script>";
	echo htmlspecialchars("<script>alert('Você foi invadido')</script>");

	echo '<hr>';

	echo strip_tags('<hr>');
	echo strip_tags("<script>alert('Você foi invadido')</script>")





 ?>