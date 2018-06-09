<?php 

require 'conexao.php';

$nome = 'Amarildo Queiroz';
$email = 'amarildoqueirozm@hotmail.com.br';
$senha = '131416';
$id = 2;

$query = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}' WHERE id={$id}";

echo '<pre>';
echo $query;
echo '<br>';

$result = pg_query($con, $query);
if ($result) {
	echo 'OK<br>';
}
else {
	echo 'Erro ao editar';
}

 ?>