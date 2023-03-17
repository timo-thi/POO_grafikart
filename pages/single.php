<?php
use App\Table\Article;
use App\Table\Categorie;


$post = Article::find($_GET['id']);

if ($post === false) {
	\App\App::notFound();
}

\App\App::setTitle($post->titre);
?>

<h2><?= $post->titre; ?></h2>

<h6><em><?= $post->categorie?></em></h6>

<p><?= $post->contenu; ?></p>