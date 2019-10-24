<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");   
$subject = $_GET['subject']; 
	$res= mysqli_query($con,"SELECT *,subject.name as subjectname, teacher.name as teachername from subject INNER JOIN teacher ON subject.teacher_id=teacher.teacher_id where subject_id='".$subject."'");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>