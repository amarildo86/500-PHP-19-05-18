<?php

	echo "<pre>";

	$num1 = 10;
	var_dump($num1);
	$num2 = "10";
	var_dump($num2);

	//Igual ==
	echo "Igual == ";
	var_dump($num1 == $num2);

	//Diferente !=
	echo "Diferente !== ";
	var_dump($num1 != $num2);

	//Idêntico ===
	echo "Idêntico === ";
	var_dump($num1 === $num2);

	//Não idêntico !==
	echo "Não idêntico !== ";
	var_dump($num1 !== $num2);

	//Menor
	echo "Menor < ";
	var_dump($num1 < $num2);

	//Menor igual
	echo "Menor igual <= ";
	var_dump($num1 <= $num2);

	//Maior >
	echo "Maior > ";
	var_dump($num1 > $num2);

	//Maior ou igual >=
	echo "Maior ou igual >= ";
	var_dump($num1 >= $num2);

	echo "<hr>";

	echo "Operador Spaceship <br>";
	//$a <=> $b Se inteiro menor que, igual ou maior que zero
	var_dump(1 <=> 0);
	var_dump(1 <=> 1);
	var_dump(1 <=> 2);

 ?>