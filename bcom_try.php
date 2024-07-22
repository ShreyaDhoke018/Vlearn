<?php
	$dblink= mysqli_connect("localhost","root","","vlearn");
	if (isset($_POST['upload'])){
		
		$targetDir ="bcom_upload/";
		$allowedType = array('png','jpeg','gif','jpg','pdf','docx');
		$successmsg = $errormsg ='';
		if(!empty(array_filter($_FILES['file']['name']))){
			foreach($_FILES['file']['name'] as $key=> $val){
				 $filename=$_FILES['file']['name'][$key]; 
				 $temLoc=$_FILES['file']['tmp_name'][$key]; 
				 $targetPath = $targetDir . $filename; 
				 $fileType= pathinfo($targetPath, PATHINFO_EXTENSION);
				 $date = date('Y-m-d');
				 if(in_array($fileType, $allowedType)){
					if( move_uploaded_file($temLoc, $targetPath)){
						 $sqlValues = "('".$filename."','".$date."')"; 
					}
					else{
						echo $errormsg="Could not able to upload files to folder";
					}
				 }else{
					echo $errormsg="File type error";
				 }
				 
				 //insert into database
				 if(!empty($sqlValues)){
					 $query = "INSERT INTO com_files(filename,uploaded_on) VALUES".$sqlValues;
					 if(mysqli_query($dblink, $query)){
						echo $successmsg="Files are uploaded successfully";
					 }else{
						echo $errormsg="Database Error";
					 }
				 }
			}
		}
	}
?><br>