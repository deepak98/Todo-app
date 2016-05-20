<?php
namespace Controller;
class Logout
{
	function post()
	{
		session_start();
		session_unset($_SESSION['user_id']); 
		session_destroy(); 
		header('Location: ./') ;

	}
}