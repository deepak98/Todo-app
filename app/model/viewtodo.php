<?php
namespace Model;

class ViewTodo
{ 
	static function get(){
		
		
		$query=MySQL::get_instance()->prepare("SELECT * from tasks WHERE user_id=:user_id");
		$query->execute(array(
			"user_id"=>$_SESSION['user_id']
			));
		$result=$query->fetchAll(\PDO::FETCH_ASSOC);
		return $result;
	}
	


}
