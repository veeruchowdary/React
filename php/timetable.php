<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");   
$class_id = $_GET['class'];
	$res= mysqli_query($con,"SELECT class_routine.class_id, class_routine.period,class_routine.day,class_routine.subject, subject.name as subjectname , teacher.name as tachername FROM `class_routine` INNER JOIN subject ON class_routine.subject=subject.subject_id INNER JOIN teacher ON subject.teacher_id=teacher.teacher_id where class_routine.class_id='".$class_id."' order by period");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>