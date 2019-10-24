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
 if(h1[1]){
	 $i=1;
	while($i<=26){
			$sql = "INSERT INTO attendance (attendance_id,status,student_id,date) VALUES ('', '$at[$i]','$si[$i]','$da')";
			mysql_query($sql, $conn);
	$i++;
	}
 }
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
			       echo "<script> location.href='http://localhost/project/admin/#/attandance'; </script>";
        exit;
				}
			}
		}

?>
<body onload="attandance.html">
</body>
</html>