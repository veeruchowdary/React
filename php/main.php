<html>
<?php

extract($_GET);
//if(!true)
//die("wrong password or worng username");
//else 
//{
$conn = mysql_connect("127.0.0.1","root","");
		if(!$conn)
		{
			die("Could not establish connection to MYSQL");
		}
		else{
		
			$db=mysql_select_db("school_5", $conn);
			$sql="SELECT * FROM noticeboard ";
		  
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
					while(true)
					{
						echo "parent.updateStatus1('abcd')";
					//	echo "parent.updateStatus1('$row['creat_timestampe']')";
					//	echo "parent.updateStatus2('$row['notice_title'])";
						//echo "parent.updateStatus3('$row['notice'])";
						
                    						
					
					}
					
				}
			}
			
			
			
		
		}
//}

?>
</html>

