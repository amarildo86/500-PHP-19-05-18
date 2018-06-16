<?php 

//db-posts.php

require_once dirname(__DIR__).'/db/connection.php';

function insertPost(array $post)
{
	$con = connect();
	$query = "INSERT INTO posts (titulo,conteudo,criado_em,publicado,usuario_id) VALUES ('{$post['titulo']}','{$post['conteudo']}','{$post['criado_em']}','{$post['publicado']}','{$post['usuario_id']}')";
	$result = pg_query($con,$query);
	disconnect($con);
	return $result;
}

function updatePost(array $post)
{
	$con = connect();
	$query = "UPDATE posts SET titulo='{$post['titulo']}',conteudo='{$post['conteudo']}',publicado='{$post['publicado']}' WHERE id={$post['id']}";
	$result = pg_query($con,$query);
	disconnect($con);
	return $result;
}

function deletePost(int $id)
{
	$con = connect();
	$query = "DELETE FROM posts WHERE id={$id}";
	$result = pg_query($con,$query);
	disconnect($con);
	return $result;
}

function findByIdPost(int $id, int $userId)
{
	$con = connect();
	$query = "SELECT * FROM posts WHERE id={$id} AND usuario_id = {$userId}";
	$result = pg_query($con,$query);
	$post =  pg_fetch_assoc($result);
	disconnect($con);
	return $post;
}

function findAllPostPublished()
{
	$con = connect();
	$query = "SELECT * FROM posts WHERE publicado = true";
	$result = pg_query($con,$query);
	$posts =  pg_fetch_all($result);
	disconnect($con);
	return $posts;
}

function findAllPostByUser(int $userId)
{
	$con = connect();
	$query = "SELECT * FROM posts WHERE usuario_id = {$userId} ORDER BY id";
	$result = pg_query($con,$query);
	$posts =  pg_fetch_all($result);
	disconnect($con);
	return $posts;
}
