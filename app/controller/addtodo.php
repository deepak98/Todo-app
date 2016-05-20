<?php
namespace Controller;
class AddTodo
{
	function post()
	{
		
        
		
		session_start();
		$user_id=$_SESSION["user_id"];
		$title=$_POST['title'];
		$content=$_POST['content'];
		$add=new \Model\AddTodo;
		$result=$add->addtodo($user_id,$title,$content);
          
		header('Location: ./home');
        
	}
}