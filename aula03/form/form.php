
<pre>

<form method="POST" action="">
	Nome: <input type="text" name="nome">
	Idade: <input type="number" name="idade" min="0">
	Email: <input type="email" name="email">
	Senha: <input type="password" name="senha">
	Cor: <input type="color" name="cor">
	
		Sexo: <input type="radio" name="sexo" value="M"> M || <input type="radio" name="sexo" value="F"> F
	
	 Cursos:
	<input type="checkbox" name="cursos[]" value="PHP"> PHP
	<input type="checkbox" name="cursos[]" value="Linux"> Linux
	<input type="checkbox" name="cursos[]" value="Front-End"> Front-End
	
	<input type="hidden" name="token" value="abc123">
	Range: <input type="range" name="range" min="0" max="50">
	
		<input type="reset">
		<input type="submit" value="Enviar">
	
</form>

<?php
print_r($_POST);
?>