<?php require_once dirname(__DIR__).'/layout/header.php'; ?>
<?php require_once dirname(dirname(__DIR__)).'/include/data/posts/db-posts.php'; ?>
<?php $user = getUserLogged();  ?>
<?php 

	$id = $_GET['id'] ?? null;
	if (!$id) {
		header('location:/'.BASEDIR.'admin/posts');
	}
	$post = findByIdPost($id, $user['id']);
	if (!$post) {
		header('location:/'.BASEDIR.'admin/posts');
	}
 ?>
<h2>Excluir Post</h2>

<form action="#" method="POST">
	<div class="form-group">
		<label>Deseja excluir o post <strong><?= $post['titulo']?></strong>?</label>
		<input type="hidden" name="id" value="<?= $post['id']?>">
	</div>
	<a href="<?='/'.BASEDIR.'admin/posts';?>" class="btn btn-outline-secondary">Não</a>
	<button type="submit" class="btn btn-outline-danger">Sim</button>
</form>
<?php require_once dirname(__DIR__).'/layout/footer.php'; ?>

<?php 

if (!empty($_POST)) {
	$id = filter_input(INPUT_GET,'id', FILTER_VALIDATE_INT);

	if (deletePost($id)) {
		header('location:/'.BASEDIR.'admin/posts');
	}
}