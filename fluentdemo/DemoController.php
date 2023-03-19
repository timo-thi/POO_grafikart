<?php
namespace FluentDemo;
require './QueryBuilder.php';


class DemoController {

	public function index() {
		$query = new QueryBuilder();
		echo $query->select('id', 'titre', 'contenu')->from('articles', 'Post')->where('id', 1)->where('id', 1)->getQuery();
	}	
}