<?php 

	echo '<pre>';

	//print_r($_SERVER);

	//$_ENV['bd'] = 'dev';
	//print_r($_ENV);

	// .php?nome=Lucas&email=lucas@lucas.com

	//print_r($_GET);

	//if (isset($_GET['nome'])) {
	//	echo $_GET['nome'];
	//}

?>

 	<form method="POST">
		<input type="text" name="nome">
		<button type="submit">OK</button>
	</form>


<?php
//	print_r($_POST);




	//session_start();
	//$_SESSION['Nome'] = 'Amarildo';

	//print_r($_SESSION);

	//setcookie('cor', 'preto', strtotime('1 day'));
	//print_r($_COOKIE);

	print_r($_REQUEST);

 ?>
