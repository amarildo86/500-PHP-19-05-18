<?php 
	
	echo '<pre>';

	echo md5('123456');
	echo '<br>';
	echo md5('123456');

	echo '<hr>';

	echo sha1('123456');
	echo '<br>';
	echo sha1('123456');

	echo '<hr>';

	echo hash('md5', '123456');
	echo '<br>';
	echo hash('sha1', '123456');

	echo '<hr>';

	echo crypt('123456', 'rl');
	echo '<br>';
	echo crypt('123456', 'rl');

	echo '<hr>';

	echo password_hash('123456', PASSWORD_BCRYPT);
	echo '<br>';
	echo password_hash('123456', PASSWORD_BCRYPT);

	echo '<hr>';

	$senha = '123';

	$cript = password_hash($senha, PASSWORD_BCRYPT);

	if (password_verify($senha, $cript)) {
		echo 'Está logado';
	}


 ?>