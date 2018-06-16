<?php 

//db-login.php

require_once dirname(__DIR__).'/db/connection.php';
require_once dirname(dirname(__DIR__)).'/utils/session-funcs.php';

function findUser(string $user, string $pass){
	$con = connect();
	$query = "SELECT * FROM usuarios WHERE email='{$user}' AND senha='{$pass}'";
	$result = pg_query($con, $query);
	$user = pg_fetch_assoc($result);
	disconnect($con);
	return $user;

}

function verifyLogin(string $user, string $pass) {
	$user = findUser($user, $pass);
	if($user) {
		initSessionUser($user);
		return true;
	}
	else {
		//Erro
		return false;
	}
}

?>