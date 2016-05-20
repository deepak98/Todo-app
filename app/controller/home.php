<?php
namespace Controller;
class Home{
	function get(){
		session_start();
		if($_SESSION['user_id'])
		{
		    $list= \Model\ViewTodo::get();
		    echo \View\Loader::loader()->render('welcome.html',array(
        	     	"tasks"=>$list
        		     ));
	    }
	    else{
	    	echo "Please Login First, Redirecting to login page";
	    	header( "refresh:1;url= ./" );
	    }

	}
}