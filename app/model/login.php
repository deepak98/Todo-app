<?php
namespace Model;
session_start();
class Login
{
	function login($username,$password)
	{
		$query=MySQL::get_instance()->query("SELECT * FROM users WHERE username='$username' && password='$password'");
		$row_no=$query->rowCount();
		if ($row_no){
			
			$result=$query->fetchColumn();
		$_SESSION["user_id"]=$result;
			
			return true;
		}
		else{
			return false;
			session_destroy();
		}
	}


}
