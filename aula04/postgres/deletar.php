<?php 

require 'conexao.php';
$id = 1;

$query = "DELETE FROM usuarios WHERE id={$id}";

echo '<pre>';
echo $query;
echo '<br>';

$result = pg_query($con, $query);
if ($result) {
	echo 'OK<br>';
}
else {
	echo 'Erro ao deletar';
}

 ?>