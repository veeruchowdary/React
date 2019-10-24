<?php 
require_once 'config.php';   
$date = date("d-m-y H:i");    
	$res= mysqli_query($con,"SELECT student.*, Sum(Payment.paid) Payment_paid,payment.roll as payment_id FROM student INNER JOIN payment ON student.roll=payment.Student_roll GROUP BY `roll`");
$result = array();
	while($row=mysqli_fetch_assoc($res)){
		$result[] = str_replace( '\r\n', " ", $row );
	}	
	echo json_encode($result); 
?>