<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");   
$class_id = $_GET['class'];
	$res= mysqli_query($con,"SELECT subject.subject_id, subject.name as subjectname,  teacher.name as teachername ,  class.name as classname FROM subject  INNER JOIN teacher ON subject.teacher_id=teacher.teacher_id  INNER JOIN class ON subject.class_id=class.class_id  WHERE subject.class_id='". $class_id ."'");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>