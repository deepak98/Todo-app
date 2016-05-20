<?php
namespace Controller;
class AddUser
{
	function post()
	{
		
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];

		$acc= new \Model\AddUser;
		$acc->adduser($name,$email,$username,$password);
        header('Location: ./'); 
		
	}
}
