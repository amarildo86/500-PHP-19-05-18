<?php 

require 'conexao.php';



$nome = 'Saulo Interlandi';
$email = 'intersau@terra.com.br';
$senha = '171173';

$query = "INSERT INTO usuarios(nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

echo '<pre>';
echo $query;
echo '<br>';

$result = mysqli_query($con, $query);
if ($result) {
	echo 'OK<br>';
}
else {
	echo 'Erro ao inserir';
}

 ?>