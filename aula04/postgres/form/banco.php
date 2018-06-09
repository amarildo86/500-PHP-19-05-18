<?php 

function conectar() {
	return pg_connect('host=localhost port=5432 dbname=aula user=amarildo password=123');
}

function desconectar($con) {
	pg_close($con);
}

/*	$tabela = usuarios
	$dados = ['nome' => 'Amarildo', 'email' => 'amarildoqueirozm@hotmail.com', 'senha' => '123']
*/

function inserir(string $tabela, array $dados) {
	foreach ($dados as $kcampo => $valor) {
		$campos[] = $campo;
		$valores[] = "'{$valor}'";
	}

	print_r($campos);
	print_r($valores);
	die();

	$campos = implode(',', $campos);
	$campos = implode(',', $valores);

	echo $campos . '<br>';
	echo $valores;
}
	

 ?>