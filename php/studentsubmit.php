<html>
<?php
error_reporting(0);

extract($_GET);
$conn = mysql_connect("127.0.0.1","root","");
if(!$conn)
		{
			die("Could not establish connection to MYSQL");
		}
		else{
		
			$db=mysql_select_db("school_5", $conn);

			$sql = "INSERT INTO student (roll,name,parent,class,section,dob,gender,address,email,transport_route,total_fee,paid,phone) VALUES ('$sid','$name','$parent_name','$class_id','$section_id','$birthday','$sex','$address','$email','$transport_id','$tf','$pa','$phone')";
			
			if(!$db)
			{
				
				die("Cannot connect to DB".mysql_error());
			}
			else
			{
			$results=mysql_query($sql, $conn);
				if(!$results)
				{
				die("Cannot get data".mysql_error());
				}
				else
				{   
			       echo "<script> location.href='http://localhost/project/admin/#/addstudent';</script>";
        exit;
				}
			}
		}

?>