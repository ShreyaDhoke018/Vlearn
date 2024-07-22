<html>
<head>
<title>Vlearn</title>
</head>
<body>
<?php
	require("vtry.php");
	
	$id = $_GET['id'];
	
	$find_video= mysqli_query($conn, "SELECT * FROM com_videos WHERE id='$id'");
	while($row = mysqli_fetch_assoc($find_video))
	{
		$name = $row['name'];
		$code = $row['code'];
		
		
	}

?>

<h1><?php echo $name; ?></h1>

 <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $code; ?>"
  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
 picture-in-picture" allowfullscreen></iframe>
 
 </body>
</html>