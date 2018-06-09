<?php 

require 'conexao.php';

$id = 60;

$query = "SELECT * FROM usuarios WHERE id={$id}";

echo '<pre>';
echo $query;
echo '<br>';

$result = mysqli_query($con, $query);

$data = mysqli_fetch_assoc($result);

?>

<?php if ($data) : ?>
	<p>Nome: <?= $data['nome'] ?></p>
	<p>Email: <?= $data['email'] ?></p>
	<p>Senha: <?= $data['senha'] ?></p>
<?php else : ?>
	<p>Náo encontrou dados</p>
<?php endif; ?>
