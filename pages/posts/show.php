<?php
$post = App::getInstance()->getTable('Post')->findWithCategory($_GET['id']);

if ($post === false) {
	\App::getInstance()->notFound();
}
\App::getInstance()->setTitle($post->titre);
?>

<h2><?= $post->titre; ?></h2>

<h6><em><?= $post->categorie?></em></h6>

<p><?= $post->contenu; ?></p>