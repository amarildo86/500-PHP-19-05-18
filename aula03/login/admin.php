<?php 

session_start();

if (!$_SESSION['logado']){
	header('location: login.php');
}

$nome = $_SESSION['nome'];

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>

<p><a href="logou.php">Inicio</a></p>
<h1>Admin</h1> 
<p>Bem vindo, <strong><?= $nome ?></strong>

</body>
</html>