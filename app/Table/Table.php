<?php
namespace App\Table;


use App\App;


class Table {


	protected static $table;


	protected static function getTable() {
		if (static::$table === null) {
			$class_name = explode('\\', get_called_class());
			static::$table = strtolower(end($class_name)) . 's';
		}
		return static::$table;
	}


	public static function find($id) {
		return static::query("
			SELECT * 
			FROM " . static::getTable() . "
			WHERE id = ?
			", [$id], true);
	}


	public static function all() {
		return static::query("
			SELECT * 
			FROM " . static::getTable() . "
			");
	}


	public function __get($get) {
		$method = 'get' . ucfirst($get);
		$this->$get = $this->$method();
		return $this->$get;
	}

	public static function query($statement, $attributes = null, $one = false) {
		if ($attributes) {
			return App::getDb()->prepare($statement, $attributes, get_called_class(), $one);
		} else {
			return App::getDb()->query($statement, get_called_class(), $one);
		}
	}
}
?>