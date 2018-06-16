<?php 

//utils/session-funcs.php

session_start();

function initSessionUser($user) {
	$_SESSION['user'] = $user;
	$_SESSION['logged'] = true;
}

function isLogged() {
	return $_SESSION['logged'] ?? false;
}

function logout() {
	session_destroy();
}

function getUserLogged() {
	return $_SESSION['user'] ?? false;
}


?>