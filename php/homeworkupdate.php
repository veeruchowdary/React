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
			echo $data;
			$sql = "INSERT INTO homework (homework_id,homework_title,homework,class_id,files,create_timestamp) VALUES ('','$title','$data','$class','$file','$date')";
			
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
			   echo "<script> location.href='http://localhost/project/admin/#/transport';</script>";
        exit;
				}
			}
		}

?>