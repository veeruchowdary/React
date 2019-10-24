<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");   
$subjectname = $_GET['subjectname']; 
$typeofexam = $_GET['typeofexam'];
$class = $_GET['class'];
	$res= mysqli_query($con,"SELECT mark.student_id,mark.mark_obtained,mark.mark_id, student.roll as rollnum , student.name as studentname, class.name as classname, subject.name as subjectname ,mark.comment FROM mark INNER JOIN student ON mark.student_id=student.student_id INNER JOIN class ON mark.class_id=class.class_id INNER JOIN subject ON mark.subject_id=subject.subject_id   where class.class_id like '%".$class."%' and subject.subject_id like '%".$subjectname."%'and mark.exam_id like '%".$typeofexam."%' ORDER BY `mark`.`student_id` ASC");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>