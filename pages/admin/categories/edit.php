<?php
$table = App::getInstance()->getTable('Category');
if (!empty($_POST)) {
	$result = $table->update($_GET['id'], [
		'titre' => $_POST['titre']
	]);
	if ($result) {
		?>
		<div class="alert alert-success">
			La Catégorie a bien été modifié.
		</div>
		<?php
	}
}
$categorie = $table->find($_GET['id']);
$from = new \Core\HTML\BootstrapForm($categorie);
?>

<form action="" method="post">
	<?= $from->input('titre', 'Titre de l\'article'); ?>
	<button class="btn btn-primary">Sauveguarder</button>
</form>