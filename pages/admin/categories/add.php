<?php
$table = App::getInstance()->getTable('Category');
if (!empty($_POST)) {
	$result = $table->create([
		'titre' => $_POST['titre']
	]);
	if ($result) {
		header('Location: admin.php?p=categories.index');
		?>
		<div class="alert alert-success">
			L'article a bien été ajouté.
		</div>
		<?php
	}
}

$from = new \Core\HTML\BootstrapForm($_POST);
?>

<form action="" method="post">
	<?= $from->input('titre', 'Titre de la catégorie'); ?>
	<button class="btn btn-primary">Sauveguarder</button>
</form>