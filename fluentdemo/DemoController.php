<?php
namespace FluentDemo;


class DemoController {
	
	public function index() {
		require './Query.php'; // Mode facade.
		echo \Query::select('id', 'titre', 'contenu')->from('articles', 'Post')->where('id', 1)->where('id', 1)->getQuery(); // Enchaînement de méthode d'architecture fluent
	}	
}