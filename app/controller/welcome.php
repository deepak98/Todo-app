<?php
namespace Controller;
class Welcome{
	function get(){
	echo \View\Loader::loader()->render('login.html',array(
			));
    }
}