<?php
	 $conn= mysqli_connect("localhost","root","","vlearn");
	

if(isset($_POST['delete_file']))
{
	$filename = $_POST['file_name'];
	$sql="DELETE FROM it_files where filename = '$filename'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Deleted Successfully";
       
    }else {
        echo "ERROR";
    }
 unlink('it_upload/'.$filename);
}
?>

	