<!DOCTYPE html>
<html>
<head>
	<title>bem Vindo</title>
</head>
<body>
<p><a href="index.php"></a></p>

<form>
	<p>Email: <input type="text" name="email"></p>
	<p>Senha: <input type="password" name="senha"></p>
	<p><input type="submit" value="Entrar"></p>
</form>
</body>
</html>

<?php

if (!empty($_POST)) {
	if ($_POST['email'] == 'admin' && $_POST['senha'] == 'admin') {
		$_SESSION['logado'] = true;
		$_SESSION['logado'] = true;


	}
	else {
		echo '<p><strong>Login ou senha inválidos</strong></p>'
	}
	
}

?>