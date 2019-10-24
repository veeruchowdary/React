<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");     
$mark_id = $_GET['mark_id']; 
	$res= mysqli_query($con,"SELECT  * ,student.roll as rollnum , student.name as studentname from mark INNER JOIN student ON mark.student_id=student.student_id  WHERE mark_id = '".$mark_id."'");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>