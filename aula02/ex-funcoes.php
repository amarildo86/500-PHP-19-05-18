<?php 

//CLI Criar uma função que receba um número e retorne se ele é par ou ímpar
//2 - exibir PAR
//3 - exibir IMPAR

//Criar uma função que receba uma idade e retorne se ele é maior de idade ou não
//18 - retornar true
//14 - retornar false
//Se maior - exibir Maior de Idade
//Se menor - exibir menor de idade

//Criar uma função que receba dois números e retorne o maior

		function verificaNumero(int &$num) {
			if ($num % 2 == 0) {
				echo 'O número ' . $num . ' é par' .PHP_EOL;
			}
			else {
				echo 'O número ' . $num . ' é ímpar' .PHP_EOL;;
			}
		}
		$num = readline('Digite um número: ');
		verificaNumero($num).PHP_EOL;

		function verificaIdade(int &$idade) {
			if ($idade >= 18) {
				echo 'Você é maior'.PHP_EOL;
			}
			else {
				echo 'Você é menor'.PHP_EOL;
			}
		}
		$idade = readline('Digite sua idade: ');
		verificaIdade($idade);

		function maiorMenor(int $num1, int $num2) {
			if ($num1 < $num2) {
				echo 'O numéro ' . $num1 . ' é menor que ' . $num2 .PHP_EOL;
			}
			else {
				echo 'O numéro ' . $num1 . ' é maior que ' . $num2 .PHP_EOL; 
			}
		}
		$num1 = readline('Digite um número: ');
		$num2 = readline('Digite outro número: ');

		maiorMenor($num1, $num2);


 ?>