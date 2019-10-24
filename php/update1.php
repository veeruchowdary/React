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
			$amt1=$pa+$py;
			//echo $amt1;
			$amt2=$tf-$amt1; //total amount paid
			//echo $amt2;
			$sql = "UPDATE payment SET paid='$amt1',due='$amt2' WHERE roll='$si'";
			mysql_query($sql, $conn);

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
			       echo "<script> location.href='http://localhost/project/admin/#/studentpayment'; </script>";
        exit;
				}
			}
		}

?>