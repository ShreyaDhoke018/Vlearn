<?php
	require("vtry.php");
	
	//$con = mysqli_connect("localhost","root","","vlearn");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	
	 $name=mysqli_real_escape_string($conn, $_POST['name']);
	
	 $link=mysqli_real_escape_string($conn, $_POST['link']);

	 $newlink = substr($link,17);
	
	 mysqli_query($conn, "INSERT INTO video(id,name,code) VALUES ('','$name','$newlink')");
	
		 
	 header("location: vtry2.php?added=$name");
?>