<?php
class Connection
{
	public static function make($config)
	{
		//PDO recibe tres parametros($casena, $user, $pass, option)
		try{

			$pdo = new PDO (
				$config['type'] . ':host=' . $config['host'] . ';dbname='. $config['name'], $config['user'], $config['pass'], 
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
 				
 				);
			return $pdo;

		} catch (PDOException $e) {
			dd($e->getMessage());
		}
  	}

}

