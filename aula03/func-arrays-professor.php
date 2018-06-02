<?php 


echo '<pre>';
// Filtrando Array

print_r(array_filter([1,2,3,4,5], function($num){
	if ($num % 2 == 0) {
		return $num;
	}
}));

// Quantidade de valores no array;
echo '<hr>';
echo count([true,'lucas',4]);


// Procura um determinado valor em um array e retorna a posicao
echo '<hr>';
$arr = ['Lucas','Jose','Maria'];

$pos = array_search('Jose', $arr);
echo $pos;
echo '<br>';
$pos = array_search('Joao', $arr);
echo $pos;

echo '<hr>';

// Procura um determinado valor em um array e retorna verdadeiro ou falso
var_dump(in_array('Jose', $arr));
var_dump(in_array('Joao', $arr));

echo '<hr>';

// Procura chave no array e retorna verdadeiro ou falso
$arr = ['nome' => 'Lucas', 'idade'=> 24];

var_dump(array_key_exists('nome', $arr));
var_dump(array_key_exists('email', $arr));

echo '<hr>';

// ORdena array
$arr = [1,5,7,6,3];

print_r($arr);
sort($arr);
echo '<br>';
print_r($arr);

echo '<hr>';

// Recebe um array e converte para string

$arr = [2,6,2018];
echo implode('/', $arr);

echo '<br>';
// Recebe uma string e converte para array

$str = '02/06/2018';
print_r(explode('/', $str));

$linha1 = 'name;idade;email';
$linha2 = 'Lucas;24;lucas@lucas.com';

$arr = explode(';', $linha1);

if (!in_array('nome', $arr)) {
	echo 'Faltando chave de nome';
}
