
<?php
error_reporting(0);

extract($_POST);
$conn = mysql_connect("127.0.0.1","root","");
if(!$conn)
		{
			die("Could not establish connection to MYSQL");
		}
		else{
		
			$db=mysql_select_db("school_5", $conn);
			
			
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {	
			$message = false;
			/*print_r($_FILES['userfile']['error']);
        switch( $_FILES['userfile']['error'] ) {
            case UPLOAD_ERR_OK:
                $message = false;
                break;
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo ' - file too large (limit of '.get_max_upload().' bytes).';
                break;
            case UPLOAD_ERR_PARTIAL:
                echo' - file upload was not completed.';
                break;
            case UPLOAD_ERR_NO_FILE:
                echo ' - zero-length file uploaded.';
                break;
            default:
                echo ' - internal error #'.$_FILES['userfile']['error'];
                break;
        }*/
		print_r($_FILES['userfile']['tmp_name']);
        if( !$message ) {
            if( !is_uploaded_file($_FILES['userfile']['tmp_name']) ) {
                echo 'Error uploading file - unknown error.';
            } else {
                // Let's see if we can move the file...
				$i=0;
				$f = '/'.$_FILES['userfile']['name'];
                $dest = __DIR__.'\..'.$f;
				$name = '..'.'/'.$_FILES['userfile']['name'];
				
                if( !move_uploaded_file($_FILES['userfile']['tmp_name'], $dest) ) { // No error supporession so we can see the underlying error.
                    echo 'Error uploading file - could not save upload (this will probably be a permissions problem in '.$dest.')';
                } else {
                    echo 'File uploaded okay.';
                }
            }
        }


			$sql = "INSERT INTO transport (homework_id,homework_title,homework,class_id,files,file_name,f_name,create_timestamp) VALUES ('','$title','$data','$class','$_FILES[userfile]','$dest','$name','$date');";
			//echo $name;
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
		}

?>	