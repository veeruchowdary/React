<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");   
$section_id = $_GET['section_id'];
	$res= mysqli_query($con,"SELECT subject.subject_id as subject_id, subject.name as subjectname, teacher.name as teachername from subject left outer JOIN teacher ON subject.teacher_id=teacher.teacher_id where section_id='". $section_id ."' ");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>