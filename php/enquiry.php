
<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");   
//$studentid = $_GET['teacherid'];
	$res= mysqli_query($con,"SELECT enquiry.*, gender.Gender FROM enquiry INNER JOIN gender ON enquiry.gender=gender.Gender_Id");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row ); 
	}	
	echo json_encode($result); 
?>