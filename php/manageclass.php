<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");  
	$res= mysqli_query($con,"SELECT section.section_id,section.teacher_id, section.name, class.name as classname, teacher.name as teachername, teacher.phone as phone FROM section INNER JOIN class ON section.class_id=class.class_id Left outeR JOIN teacher ON section.teacher_id=teacher.teacher_id;");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>