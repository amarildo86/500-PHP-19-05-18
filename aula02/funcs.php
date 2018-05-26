<?php 

	function olaMundo() {
		echo 'Olá Mundo <br>';
	}

	olaMundo();

	echo '<hr>';

	function olaUsuario($nome) {
		echo 'Olá ' . $nome . '<br>';
	}

	olaUsuario('Amarildo');
	olaUsuario('Maria');
	echo '<hr>';

	function olaUsuario2($nome = '4Linux') {
		echo 'Olá ' . $nome . '<br>';
	}

	olaUsuario2('Lucas');
	olaUsuario2();

	function soma(int $num1, int $num2) {
		echo $num1 + $num2 . '<br>';
	}

	soma(3,4);

	echo '<hr>';

	function verificaIdade(int $idade) : bool {
		if ($idade >= 18) {
			return true;
		}
		else {
			return false;
		}
	}

	$var = verificaIdade(31);
	var_dump($var);

	echo '<br>';

	function negrito(string $txt) : string {
		return '<strong>' . $txt . '</strong>';
	}

	echo negrito('4Linux') . '<br>';

	$msg = '4Linux - PHP';

	function italico() {
		//Usando variavel de escopo global
		global $msg;
		echo '<i>' . $msg . '</i>';
	}	

	italico();
	echo '<hr>';

	function adicionar(&$fruta) {
		++$fruta;
	}
	$laranjas = 5;
	echo $laranjas . '<br>';
	++$laranjas;
	echo $laranjas . '<br>';
	adicionar($laranjas);
	echo $laranjas . '<br>';
	adicionar($laranjas);
	echo $laranjas . '<br>';


 ?>