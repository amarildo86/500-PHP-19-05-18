<?php 

// Verifica se a variavel está setada.
$nome = '';
if (isset($nome)) {
	echo '$nome existe';
} else {
	echo '$nome não existe';
}
echo '<br>';
$arr = ['nome' => 'Lucas'];

if (isset($arr['idade'])) {
	echo 'existe o indice idade';
} else {
	echo 'não existe o indice idade';
}

echo '<hr>';

// Destroi variavel.

$var = 'asd';
unset($var);
 echo (isset($var)) ? 'existe' : 'nao existe';

echo '<hr>';
 // Verifica se é vazio

$var = '';
 echo (empty($var)) ? 'vazio' : 'nao vazio';
 echo '<br>';
 $var = 0;
 echo (empty($var)) ? 'vazio' : 'nao vazio';
 echo '<br>';
 $var = false;
 echo (empty($var)) ? 'vazio' : 'nao vazio';
  echo '<br>';
 $var = [];
 echo (empty($var)) ? 'vazio' : 'nao vazio';
 echo '<br>';
 $var = null;
 echo (empty($var)) ? 'vazio' : 'nao vazio';
echo '<hr>';
 
 // Verifica se var é do tipo especifico
 // is_array

 if(!is_array($var)){
 	echo 'nao é um array';
 }

echo '<hr>';
 // Serializar var

 $arr = [
 		'nome' => 'lucas',
 		'emails' => [
 			'lucas@lucas.com', 
 			'adm@lucas.com'
 		]
 	];

$str = serialize($arr);
echo $str;

echo '<br>';

print_r(unserialize($str));

echo '<hr>';


$str = 'Olá meu nome é %s';

printf($str,'lucas');

echo '<hr>';
echo htmlspecialchars('<hr>');

// echo "<>alert(' vc foi invadido')</>";

echo htmlspecialchars("<>alert(' vc foi invadido')</>");

echo '<hr>';
echo strip_tags('<hr>');
echo strip_tags("<>alert(' vc foi invadido')</>");