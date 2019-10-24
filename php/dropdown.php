<?php

extract($_GET);
$conn = mysql_connect("127.0.0.1","root","");
		if(!$conn)
		{
			die("Could not establish connection to MYSQL");
		}
		else{
		
			mysql_select_db("school_5",$conn);

			//$sql = "INSERT INTO noticeboard (notice_id,notice_title,notice,create_timestamp) VALUES ('','$title','$data','$date')";
			$tid = 't001';
			$sql = "SELECT class,section FROM assignteacher WHERE teacher_id='$tid'";
			 $run=mysql_query($sql,$conn);	
			 while($row = mysql_fetch_array($run)) {
				echo $row['class'].$row['section'].";";
			 }
		}

?>