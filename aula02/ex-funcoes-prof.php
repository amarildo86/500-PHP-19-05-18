<?php 

	function parImpar($num) : string {
		return ($num % 2 == 0) ? 'PAR' : 'IMPAR';
	}

	function maiorIdade($idade) : string {
		return ($idade < 18) ? 'MENOR' : 'MAIOR';
	}

	function maiorNumero($num1, $num2) : string{
		return ($num1 > $num2) ? 'MAIOR NUMERO' : 'MENOR NUMERO';
	}
	
	echo 'PAR OU IMPAR'.PHP_EOL;
	echo '---------------------'.PHP_EOL;
	$num = readline ('Digite um número: ').PHP_EOL;
	echo parImpar($num);

	echo 'MAIOR OU MENOR DE IDADE'.PHP_EOL;
	echo '---------------------'.PHP_EOL;
	$idade = readline ('Digite sua idade: ').PHP_EOL;
	echo maiorIdade($idade);

	echo 'MAIOR NÚMERO'.PHP_EOL;
	echo '---------------------'.PHP_EOL;
	$num1 = readline ('Digite um número: ').PHP_EOL;
	$num2 = readline ('Digite outro número: ').PHP_EOL;
	echo maiorNumero($num1, $num2);

 ?>