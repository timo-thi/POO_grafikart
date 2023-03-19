<?php
if (!empty($_POST)) {
	$auth = new \Core\Auth\DBAuth(App::getInstance()->getDb());
	if ($auth->login($_POST['username'], $_POST['password'])) {
		header('Location: admin.php');
	} else {
		?>
		<div class="alert alert-danger">
			Identifiant ou mot de passe incorrect.
		</div>
		<?php
	}
}
$from = new \Core\HTML\BootstrapForm($_POST);
?>

<form action="" method="post">
	<?= $from->input('username', 'Pseudo'); ?>
	<?= $from->input('password', 'Mot de passe', ['type' => 'password']); ?>
	<?= $from->submit(); ?>
</form>