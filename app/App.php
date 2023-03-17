<?php
namespace App;

class App {

	const DB_NAME = 'Grafikart';
	const DB_USER = 'IngeDev';
	const DB_PASS = 'IngeDev#';
	const DB_HOST = 'localhost:3306';


	private static $database;


	private static $title = 'Grafikart Tutorials';


	public static function getDb(): Database {
		if (self::$database === null) {
			self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
		}
		return self::$database;
	}


	public static function notFound() {
		header("HTTP/1.0 404 Not Found");
		header("Location: index.php?p=404");
	}


	public static function getTitle() {
		return self::$title;
	}


	public static function setTitle($title) {
		self::$title = $title . ' - ' . self::$title;
	}
}