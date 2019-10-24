<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");  
  
$classid = $_GET['classid']; 
	$res= mysqli_query($con,"SELECT * from section where class_id='".$classid."'");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>