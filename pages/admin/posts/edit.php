<?php
$postTable = App::getInstance()->getTable('Post');
if (!empty($_POST)) {
	$result = $postTable->update($_GET['id'], [
		'titre' => $_POST['titre'],
		'contenu' => $_POST['contenu'],
		'category_id' => $_POST['category_id']
	]);
	if ($result) {
		?>
		<div class="alert alert-success">
			L'article a bien été modifié.
		</div>
		<?php
	}
}
$post = $postTable->findWithCategory($_GET['id']);
$categories = App::getInstance()->getTable('Category')->extract('id', 'titre');
$from = new \Core\HTML\BootstrapForm($post);
?>

<form action="" method="post">
	<?= $from->input('titre', 'Titre de l\'article'); ?>
	<?= $from->input('contenu', 'Contenu de passe', ['type' => 'textarea']); ?>
	<?= $from->select('category_id', 'Catégorie', $categories); ?>
	<button class="btn btn-primary">Sauveguarder</button>
</form>