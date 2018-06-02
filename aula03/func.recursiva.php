<?php 

	function fatorial($x){
		return $x > 1 ? $x * fatorial($x - 1) : 1;
	};

	echo fatorial(4);

	

 ?>