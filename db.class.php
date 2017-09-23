<?php

define('DB_HOST','localhost');
define('DB_NAME','sisteminha');
define('DB_USER','root');
define('DB_PASS','');

class Db
{

	private static $pdo;

	public static function getInstance()
	{
		if(!isset(self::$pdo))
		{
			try
			{
				self::$pdo = new pdo('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
				
			}
			catch(PDOExeption $e){
				echo $e->getMessage();
			}
		}
		
		return self::$pdo;

			
	}

	public static function prepare($sql)
		{
			return self::getInstance()->prepare($sql);
		}	
}


?>