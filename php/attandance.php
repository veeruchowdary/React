<html>
<head>
<style>
input[type=text], select {
    width: 100%;
	background-color: #eee;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=date], select {
    width: 50%;
    padding: 12px 20px;
	border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}

input[type=submit] {
    width: 100%;
    background-color: #bfc4ca;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

	}

input[type=submit]:hover {
    background-color: #7a8188;
}

div {
    border-radius: 5px;
    background-color: #2a3f54;
    padding: 20px;
}
.main{
	border-radius: 5px;
    background-color: 	#A9A9A9;
    padding: 20px;
}
form{
	 margin: 0 auto; 
	 width:500px;
	 }
label{
	color: #3e5d7d;
}
	 
th{
	color: #3e5d7d;
}

</style>
</head>
<body>
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
			$sql="SELECT studentid FROM login";
			

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
			
			$row = mysql_fetch_assoc($results);
			
				   if(true)
				   {
					   
								    $sqlb="SELECT * FROM student WHERE class='$classatta'";
									$results1=mysql_query($sqlb, $conn);
									$array1 = array();
									$array2 = array();
									while($row1 = mysql_fetch_assoc($results1))
									{
										
										$array1[] = $row1['roll'];
										$array2[] = $row1['name'];
									}
									
								
								
								}
				     
					}
				   
				  
				   
				
			}
		}

?>
<br/>
<!--<form action="update.php" method="GET">
date:<input type="date" id="usrtel" name="da" placeholder="yyyy-mm-dd" value="" ><br/><br/>
Student_id:<input type="text" id="usrtel" name="si1" value="<?php //echo $array1[0]; ?>" readonly><br/>
Student_name:<input type="text" id="usrtel" name="sn1" value="<?php //echo $array2[0]; ?>" readonly><br/>
attend:<input type="checkbox" id="usrtel" name="at1" value="p" ><br/><br/>
Student_id:<input type="text" id="usrtel" name="si2" value="s_002" readonly><br/>
Student_name:<input type="text" id="usrtel" name="sn2" value="xyz" readonly><br/>
attend:<input type="checkbox" id="usrtel" name="at2" value="p" ><br/><br/>
Student_id:<input type="text" id="usrtel" name="si3" value="s_003" readonly><br/>
Student_name:<input type="text" id="usrtel" name="sn3" value="mln" readonly><br/>
attend:<input type="checkbox" id="usrtel" name="at3" value="p" ><br/>
<br />
Holiday:<input type="checkbox" id="usrtel" name="h1" value="h" checked><br/>
<input type="submit" value="SUBMIT" />
</form>-->
<div>
<form class="form-inline" action="update.php" method="GET" >
<br><table border='2' cellspacing='4' cellpadding='8'>
<tr style='background-color:grey;'><th>STUDENT_ID</th><th>NAME</th><th>ABSENT</th>
<div class="main">
<input type="hidden" id="h1" name="h[<?php echo $classatta; ?>]">
<label><b><h3>DATE:</h3></b></label><input type="date" id="usrtel" name="da" placeholder="Select the date" value="" style="allign="></div>
<?php $i=0; $flag="true"; ?>
<?php while($array1[$i]){ ?> 
<!--<div class="main">-->
<tr>
<td><input type="text" id="usrtel" name="si[<?php echo $i+1; ?>]" value="<?php echo $array1[$i]; ?>" readonly></td>
<td><input type="text" id="usrtel" name="sn<?php echo $i+1; ?>" value="<?php echo $array2[$i]; ?>" readonly></td>
<td><input type="hidden" id="status_1_" name="at[<?php echo $i+1; ?>]"  value="p"><input type="checkbox" id="usrtel" name="at[<?php echo $i+1; ?>]" value="a" ></td></tr><!--</div>-->
	<?php $i=$i+1; }?><br>
</table><br />
<div >
<input type="submit" value="SUBMIT" />
</div>
</form>
</div>
</body>
</html>

