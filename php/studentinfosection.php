<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");   
$class_id = $_GET['class_id'];
	$res= mysqli_query($con,"SELECT * FROM student WHERE class='". $class_id ."' ");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>