<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<title>Blog</title>
</head>
<body>
<div style="margin: 25px 100px 25px 100px">
<div class="row">
	<div class="col">
		<h1>Blog</h1>
	</div>
</div>
<hr>
<form method="POST" action="#">
	<div class="form-group">
	<label>Email:</label>
	<input type="email" name="email" class="form-control form-control-sm">
	</div>
	<div class="form-group">
	<label>Pass:</label>
	<input type="password" name="pass" class="form-control form-control-sm">
	</div>
	<div class="form-group" style="margin-top: 5px;">
		<a href="./../../" class="btn btn-sm btn-warning">Go Back</a>
		<input type="submit" class="btn btn-sm btn-success" value="Login">
	</div>
</form>

<?php require_once '../../layout/footer.php'; ?>

<?php

require_once dirname(dirname(__DIR__)).'/include/data/login/db-login.php';

if (!empty($_POST)) {
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$pass = filter_input(INPUT_POST, 'pass');

	if(verifyLogin($email, $pass)) {
		header('Location:/'.BASEDIR.'admin');
	}
	else {
		header('Location:/'.BASEDIR.'admin/login/login.php');
	}
	
}

?>