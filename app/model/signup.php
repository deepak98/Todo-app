<?php
namespace Model;
class AddUser
{
	function adduser($name,$email,$username,$password)
	{
        $query=MySQL::get_instance()->prepare("INSERT INTO users (name,email,username,password)
        	VALUES(:name,:email,:username,:password)");
        $result=$query->execute(array(
			"name" => $name,
			"email" => $email,
			"username" => $username,
			"password"=> $password));
        
}

}