<?php 
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost","root","","school_5"); 
date_default_timezone_set("Asia/kolkata");    
	$res= mysqli_query($con,"SELECT * from class ");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>