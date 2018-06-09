<?php 

require 'conexao.php';



$nome = 'Thomas Oliveira';
$email = 'thomasoliveira@hotmail.com';
$senha = '654123';

$query = "INSERT INTO usuarios(nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

echo '<pre>';
echo $query;
echo '<br>';

$result = pg_query($con, $query);
if ($result) {
	echo 'OK<br>';
}
else {
	echo 'Erro ao inserir';
}

?>