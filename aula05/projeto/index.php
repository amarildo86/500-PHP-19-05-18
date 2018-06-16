<?php require_once 'include/data/posts/db-posts.php'; ?>
<?php require_once 'layout/header.php'; ?>

<?php if (findAllPostPublished()) :?>

	<?php foreach (findAllPostPublished() as $post): ?>
		<div class="card bg-light" style="margin: 10px">
		  <div class="card-header"><?= $post['criado_em']?></div>
		  <div class="card-body">
		  <h5 class="card-title"><?= $post['titulo']?></h5>
		    <p class="card-text"><?= $post['conteudo']?></p>
		  </div>
		</div>
	<?php endforeach; ?>

<?php else :  ?>
	<p>Blog em Branco</p>
<?php endif; ?>

<?php require_once 'layout/footer.php'; ?>
