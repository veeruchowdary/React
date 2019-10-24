<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");    
	$res= mysqli_query($con,"SELECT * from exam ");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>