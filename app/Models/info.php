<?php 
	
namespace app\Models;
use MF\Model\Model;
class Info extends Model{
	
	public function getInfo(){
		$query ="
		select * from tb_info
		";
		return $this->db->query($query)->fetchAll();
	}
}

?>