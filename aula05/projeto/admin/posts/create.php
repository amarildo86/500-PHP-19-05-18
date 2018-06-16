<?php require_once dirname(__DIR__).'/layout/header.php'; ?>
<?php require_once dirname(dirname(__DIR__)).'/include/data/posts/db-posts.php'; ?>
<?php $user = getUserLogged();  ?>
<h2>Novo Post</h2>

<div class="container">
<form method="POST" action="#">
	<div class="form-group">
		<label>Título</label>
		<input type="text" class="form-control" name="titulo" required>		
	</div>
	<div class="form-group">
		<label>Conteudo</label>
		<textarea class="form-control" name="conteudo"></textarea>	
	</div>
	<div class="form-check">
		<input type="checkbox" style="margin-left: 0px" class="form-check-input" name="publicado" value="true">
		<label class="form-check-label">Publicado</label>
	</div>
	<a href="<?='/'.BASEDIR.'admin/posts';?>" class="btn btn-outline-warning">Voltar</a>
	<button type="submit" class="btn btn-outline-success">Cadastrar</button>	
</form>
</div>


<?php require_once dirname(__DIR__).'/layout/footer.php'; ?>

<?php 

if (!empty($_POST)) {
	$titulo = filter_input(INPUT_POST, 'titulo');
	$conteudo = filter_input(INPUT_POST, 'conteudo');
	$publicado = filter_input(INPUT_POST, 'publicado', FILTER_VALIDATE_BOOLEAN);
	$publicado = $publicado ? 't' : 'f';
	$userId = $user['id'];
	$criadoEm = date('Y-m-d H:i:s');

	$data = [
		'titulo' => $titulo,
		'conteudo' => $conteudo,
		'publicado' => $publicado,
		'criado_em' => $criadoEm,
		'usuario_id' => $userId
	];

	if (insertPost($data)) {
		header('location:/'.BASEDIR.'admin/posts');
	}
}

 ?>