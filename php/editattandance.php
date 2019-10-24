<?php 
require_once 'config.php';   
$caldate = date("Y-m-d");
$attandance_id = $_GET['attandance_id'];  

	$res= mysqli_query($con,"SELECT * FROM `attendance` INNER JOIN student ON attendance.student_id=student.student_id where `attendance_id` =  '".$attandance_id."'");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>