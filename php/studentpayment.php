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
table
        {
           position:absolute;
           
           right:0%;
		}

</style>
</head>
<body  bgcolor="#2a3f54">
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
					   
								    $sqlb="SELECT * FROM payment WHERE class_id='$classatta'";
									//echo $classatta;
									$results1=mysql_query($sqlb, $conn);
									$array1 = array();
									$array2 = array();
									$array3 = array();
									$array4 = array();
									$array5 = array();
									$array6 = array();
									while($row1 = mysql_fetch_assoc($results1))
									{
										
										$array1[] = $row1['roll'];
										$array2[] = $row1['name'];
										$array3[] = $row1['total_fee'];
										$array4[] = $row1['paid'];
										$array5[] = $row1['due'];
										$array6[] = $row1['due_date'];
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

<br><table border='2' cellspacing='4' cellpadding='8' width="1500" >
<tr style='background-color:grey;'><th>STUDENT_ID</th><th>NAME</th><th>Total Fee</th><th>Paid</th><th>Due</th><th>Date - Last Updated</th><th>Payment</th><th>PAY</th></tr>

<?php $i=0; $flag="true"; ?>
<?php while($array1[$i]){ ?> 
<!--<div class="main">-->
<form class="form-inline" action="update1.php" method="GET" >
<tr>
<td><input type="text" id="usrtel" name="si" value="<?php echo $array1[$i]; ?>" readonly></td>
<td><input type="text" id="usrtel" name="sn" value="<?php echo $array2[$i]; ?>" readonly></td>
<td><input type="text" id="usrtel" name="tf" value="<?php echo $array3[$i]; ?>" readonly></td>
<td><input type="text" id="usrtel" name="pa" value="<?php echo $array4[$i]; ?>" readonly></td>
<td><input type="date" id="usrtel" name="du" value="<?php echo $array5[$i]; ?>" readonly></td>
<td><input type="text" id="usrtel" name="dd" value="<?php echo $array6[$i]; ?>" readonly></td>
<td><input type="text" id="usrtel" name="py" value="" placeholder="payment"></td>
<td><input type="submit" value="PAY NOW" /></td>
</tr><!--</div>-->
	
</form>	
	<?php $i=$i+1; }?><br>
</table><br />
<div >
<!--<input type="submit" value="SUBMIT" />-->
</div>

</div>
</body>
</html>