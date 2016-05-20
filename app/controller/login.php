<?php
namespace Controller;
class Login
{	
		
        function post()
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        $acc=new \Model\Login;
        $result=$acc->login($username,$password);
        
        

        if($result){
           	header('Location:./home');        	
        }
        else{
        	echo "Username and Password do not match......Please login again";
        	echo \View\Loader::loader()->render('login.html',array(
			));        	
        }
    }

}