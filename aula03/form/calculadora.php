<pre>

<form method="POST">
	<p>Numero 1: <input type="number" name="numero1"></p>
	<p>Numero 2: <input type="number" name="numero2"></p>
	<p><input type="submit" value="Calcular"></p>	
</form>

<?php

	if (!empty($_POST)){
			$num1 = $_POST['numero1'];
			$num2 = $_POST['numero2'];
			echo 'Soma igual a :' . ($num1 + $num2);
			echo '<hr>';

			echo 'Subtração igual a :' . ($num1 - $num2);
			echo '<hr>';

			echo 'Multiplicação igual a :' . ($num1 * $num2);
			echo '<hr>';

			echo 'Divisão igual a :' . ($num1 / $num2);
			echo '<hr>';
	}
 ?>