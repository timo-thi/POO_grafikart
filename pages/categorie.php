<?php
use \App\Table\Article;
use \App\Table\Categorie;

$categories = Categorie::find($_GET['id']);
if ($categories === false) {
	\App\App::notFound();
}
$articles = Article::lastByCategory($_GET['id']);
$categories = Categorie::all();
?>

<h1><?= $categories->titre; ?></h1>

<div class="row">
	<div class="col-sm-8">
		<?php foreach ($articles as $post): ?>
			<h2>
				<a href="<?= $post->url?>"><?php echo $post->titre;?></a>
			</h2>
			<h6>
				<p><em><?= $post->categorie;?></em></p>
			</h6>
			<p><?= $post->extrait?></p>
			
		<?php endforeach; ?>
	</div>
	<div class="col-sm-4">
		<ul>
			<?php foreach (\App\Table\Categorie::all() as $categorie):?>
			<li>
				<a href="<?= $categorie->url?>">
					<?=$categorie->titre?>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>