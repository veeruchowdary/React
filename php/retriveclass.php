<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");     
$sections = $_GET['sections']; 
	$res= mysqli_query($con,"SELECT section.section_id, section.name as sectionname , class.name as classname , class.`class_id` as classid, teacher.name as teachername , teacher.`teacher_id` as teacherid FROM `section`INNER JOIN class ON section.class_id=class.class_id INNER JOIN teacher ON teacher.teacher_id=section.teacher_id  WHERE section.section_id = '".$sections."'");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>