<?php 

	$idade = 19;
	$temHabilitacao = true;

	if ($idade >= 18 && $temHabilitacao){
		echo "Pode dirigir";
	}
	else if ($idade >= 18) {
		echo "Não pode dirigir mas pode tirar habilitação";
	}
	else {
		echo "Não pode dirigir e nem tirar habilitação";
	}

 ?>