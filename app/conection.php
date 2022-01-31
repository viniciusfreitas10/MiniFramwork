<?php 

namespace app;

class Conection{
	public static function getDb(){
		try{
			$con = new \PDO(
				'mysql:host=localhost;dbname=mvc;charset=utf8',
				'root', ''
			);
			return $con;
		}catch(\PDOException $e){
			echo $e;
		}
	}
}
	
?>