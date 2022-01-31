<?php 
	
namespace MF\Model;
use app\Conection;
class Container{
	public static function getModel($model){
		$class = "\\app\\Models\\".ucfirst($model);
		$con =  Conection::getDb();

		return new $class($con);
	}
}

?>