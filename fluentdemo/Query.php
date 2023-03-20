<?php
require_once './QueryBuilder.php';

class Query {

	public static function __callStatic($method, $arguments)
	{
		$query = new FluentDemo\QueryBuilder();
		return call_user_func_array([$query, $method], $arguments);
	}

}