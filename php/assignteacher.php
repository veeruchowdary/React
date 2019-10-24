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
			$i=0;
			while($i<21){
							if($na1==na){$class='1';$section='A';$sql = "INSERT INTO assignteacher (teacher_id,class,section) VALUES ('$tid','$class','$section')";}
							if($na2==nb){$class='1';$section='B';$sql1 = "INSERT INTO assignteacher (teacher_id,class,section) VALUES ('$tid','$class','$section')";}
							if($kg1==ka){$class='2';$section='A';$sql2 = "INSERT INTO assignteacher (teacher_id,class,section) VALUES ('$tid','$class','$section')";}
							if($kg2==kb){$class='2';$section='B';$sql3 = "INSERT INTO assignteacher (teacher_id,class,section) VALUES ('$tid','$class','$section')";}
							if($fi1==fa){$class='3';$section='A';$sql4 = "INSERT INTO assignteacher (teacher_id,class,section) VALUES ('$tid','$class','$section')";}
							if($fi2==fb){$class='3';$section='B';$sql5 = "INSERT INTO assignteacher (teacher_id,class,section) VALUES ('$tid','$class','$section')";}
			
$i=$i+1;
			}
			if(!$db)
			{
				
				die("Cannot connect to DB".mysql_error());
			}
			else
			{
				mysql_query($sql1, $conn);
				mysql_query($sql1, $conn);
				mysql_query($sql2, $conn);
				mysql_query($sql3, $conn);
				mysql_query($sql4, $conn);
				mysql_query($sql5, $conn);
			$results=mysql_query($sql, $conn);
				if(!$results)
				{
				die("Cannot get data".mysql_error());
				}
				else
				{   
			   echo "<script> location.href='http://localhost/project/main/admin/#/teacherinfo';</script>";
        exit;
				}
			}
		}

?>