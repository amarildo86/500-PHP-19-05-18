<?php 

require 'conexao.php';

$query = "SELECT * FROM usuarios";

//echo '<pre>';
//echo $query;
//echo '<br>';

$result = pg_query($con, $query);

$data = pg_fetch_all($result);

//print_r($data);

?>

<table border="1">
	<tr>
		<td>Nome</td>
		<td>Email</td>
		<td>Senha</td>
	</tr>
	<?php foreach ($data as $user): ?>
		<tr>
			<td><?= $user['nome'] ?></td>
			<td><?= $user['email'] ?></td>
			<td><?= $user['senha'] ?></td>
		</tr>
	<?php endforeach; ?>
</table>