<?php
namespace Model;
class DoneTodo{
	function donetodo($check){
		$query=MySQL::get_instance()->prepare("SELECT * from tasks ");
		$query->execute();
		$count=$query->fetchColumn();
		for($i=0;$i<$count;$i++){

$del_id = $check[$i];
$sql = "DELETE FROM tasks WHERE task_id='$del_id'";
$result=MySQL::get_instance()->query($sql);

}	
}
}