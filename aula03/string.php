<?php 

	$str = 'amarildo queiROZ mOREIRA';

	echo strtoupper($str);
	echo '<hr>';

	echo strtolower($str);
	echo '<hr>';

	echo ucfirst($str);
	echo '<hr>';

	echo ucwords($str);
	echo '<hr>';

	echo strlen($str);
	echo '<hr>';

	//Substitui valores da String conforme parametos

	echo str_replace(['amarildo', 'queiROZ'], ['Patricia', 'Dos Santos'], $str);
	echo '<hr>';

	//Parte de uma String

	echo substr($str, 5);
	echo '<hr>';

	//Procura pedaço de String

	echo strpos($str, 'ROZ');	

 ?>