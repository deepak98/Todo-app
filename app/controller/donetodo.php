<?php
namespace Controller;
class DoneTodo{
	function post(){
		$check = $_POST['checkbox'];

	$list= new \Model\DoneTodo;
	$acc=$list->donetodo($check);
	header('Location: ./home');
}
}