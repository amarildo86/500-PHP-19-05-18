<?php require_once dirname(__DIR__).'/layout/header.php'; ?>
<?php require_once dirname(dirname(__DIR__)).'/include/data/posts/db-posts.php'; ?>
<?php $user = getUserLogged();  ?>

<h2>Posts</h2>
<?php if (findAllPostByUser($user['id'])): ?>
	<a href="create.php" class="btn btn-outline-primary float-right" style="margin: 5px">Novo Post</a>
	<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Titulo</th>
			<th>Publicado</th>
			<th>Criado Em</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach (findAllPostByUser($user['id']) as $post):?>
		<tr>
			<td><?= $post['id']?></td>
			<td><?= $post['titulo']?></td>
			<td><?= ($post['publicado'] == 't') ? 'Publicado' : 'Não Publicado'?></td>
			<td><?= substr($post['criado_em'],0,19)?></td>
			<td>
				<a href="edit.php?id=<?=$post['id']?>" class="btn btn-outline-info">Editar</a>
				<a href="delete.php?id=<?=$post['id']?>" class="btn btn-outline-danger">Deletar</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php else: ?>
	<p>Você não fez nenhum post, deseja fazer o primeiro??</p>
	<p><a href="create.php" class="btn btn-outline-primary" style="margin: 5px">Novo Post</a></p>
<?php endif; ?>
<?php require_once dirname(__DIR__).'/layout/footer.php'; ?>