<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");   
$studentid = $_GET['studentid'];
	$res= mysqli_query($con,"SELECT *, student.name as studentname, class.name as classname, section.name as sectionname FROM student INNER JOIN class ON student.class_id=class.class_id INNER JOIN section ON student.section_id=section.section_id WHERE student_id= '". $studentid ."' ");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>