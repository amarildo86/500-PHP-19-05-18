<?php require_once dirname(__DIR__).'/layout/header.php'; ?>
<?php require_once dirname(dirname(__DIR__)).'/include/data/posts/db-posts.php'; ?>
<?php $user = getUserLogged();  ?>
<?php 
	$id = filter_input(INPUT_GET,'id', FILTER_VALIDATE_INT);
	if (!$id) {
		header('location:/'.BASEDIR.'admin/posts');
	}
	$post = findByIdPost($id, $user['id']);
	if (!$post) {
		header('location:/'.BASEDIR.'admin/posts');
	}
	$checked = $post['publicado'] == 't' ? 'checked' : null;

 ?>
<h2>Editar Post</h2>
<div class="container">
	<form method="POST" action="#">
		<div class="form-group">
			<label>Titulo</label>
			<input type="text" class="form-control" name="titulo" value="<?=$post['titulo']?>" required>
		</div>
		<div class="form-group">
			<label>Conteudo</label>
			<textarea class="form-control" name="conteudo"><?=$post['conteudo']?></textarea>
		</div>
		<div class="form-check">
			<input type="checkbox" style="margin-left: 0" class="form-check-input" name="publicado" <?=$checked?>>
			<label class="form-check-label">Publicado</label>
		</div>
		<a href="<?='/'.BASEDIR.'admin/posts';?>" class="btn btn-outline-warning">Voltar</a>
		<button type="submit" class="btn btn-outline-success">Editar</button>
	</form>
</div>
<?php require_once dirname(__DIR__).'/layout/footer.php'; ?>

<?php 

if (!empty($_POST)) {
	
	$titulo = filter_input(INPUT_POST, 'titulo');
	$conteudo = filter_input(INPUT_POST, 'conteudo');
	$publicado = filter_input(INPUT_POST, 'publicado',FILTER_VALIDATE_BOOLEAN);
	$publicado = $publicado ? 't' : 'f';

	$data = [
		'titulo' => $titulo,
		'conteudo' => $conteudo,
		'publicado' => $publicado,
		'id' => $post['id']
	];

	if (updatePost($data)) {
		header('location:/'.BASEDIR.'admin/posts');
	}
}