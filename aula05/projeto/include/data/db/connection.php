<?php 

//connection.php

require_once dirname(dirname(__DIR__)).'/config/config.php';




function connect() {
	//host=localhost port=5432 dbname=aula user=amarildo password=123	
	$conString = 'host='.HOST.' port='.PORT.' dbname='.DB.' user='.USER.' password='.PASS;
	$con = pg_connect($conString);
	return $con;

}

function disconnect($con) {
	pg_close($con);
}

?>