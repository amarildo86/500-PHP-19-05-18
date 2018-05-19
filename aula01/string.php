<?php 

	$nome = 'Amarildo';
	$idade = 31;

	echo "<pre>";
	echo 'Meu nome é \'$nome\' e tenho $idade anos';
	echo "<hr>";
	echo 'Meu nome é \'' . $nome . '\' e tenho ' . $idade . ' anos';
	echo "<hr>";
	echo "Meu nome é \"$nome\" e tenho $idade anos";
	echo "<hr>";
	echo "Meu nome é {$nome} e tenho {$idade} anos";

 ?>