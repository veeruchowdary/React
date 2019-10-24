<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");  
$res= mysqli_query($con,"SELECT * FROM transport");
$result = array();
$abc=mysqli_fetch_assoc($res);
	while($row=mysqli_fetch_assoc($res)){
		header("Content-type: image/jpeg");
		$result[] = str_replace( '\r\n', " ", $row );
		echo $row['files'];
	}	
?>
