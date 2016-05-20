<?php
namespace Model;
class AddTodo{
	function addtodo($user_id,$title,$content){

		$query=MySQL::get_instance()->prepare("INSERT into tasks(
			user_id,title,content)
			VALUES(:user_id,:title,:content)");
		$result=$query->execute(array(
			"user_id"=>$user_id,
			"title"=>$title,
			"content"=>$content
			));
	}
}
