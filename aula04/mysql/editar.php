<?php 

require 'conexao.php';

$nome = 'Paula Maria';
$email = 'paula_maria@hotmail.com';
$senha = '123456';
$id = 33;

$query = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}' WHERE id={$id}";

echo '<pre>';
echo $query;
echo '<br>';

$result = mysqli_query($con, $query);
if ($result) {
	echo 'OK<br>';
}
else {
	echo 'Erro ao editar';
}

 ?>