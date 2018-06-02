<form method="POST">
	<p>Num1 <input type="number" name="num1"></p>
	<p>Num1 <input type="number" name="num2"></p>
	<select name="op">
		<option value="add">Add</option>
		<option value="sub">Sub</option>
		<option value="div">Div</option>
		<option value="mul">Mul</option>
	</select>
	<p><input type="submit" value="Calcular"></p>
</form>

<?php

if (!empty($_POST)) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$op = $_POST['op'];

	switch ($op) {
		case 'add':
			echo ($num1 + $num2);
			break;
		case 'sub':
			echo ($num1 - $num2);
			break;
		case 'div':
			echo ($num1 / $num2);
			break;
		case 'mul':
			echo ($num1 * $num2);
			break;
	}
}

?>