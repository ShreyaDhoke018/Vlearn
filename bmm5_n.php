<!DOCTYPE html>
<html lang="en" >
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website </title>

<!--google fonts cdn link-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

<!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<!--custom css file link-->
    <link rel="stylesheet" href="styleviewfile.css">
    
</head> 
<body>

<!--header section starts-->

<header>

    <div id="menu" class="fas fa-bars"> </div>

    <a href="index.php" class="logo"> <i class="fas fa-user-graduate"> </i> VLEARN </a>

    <nav class="navbar">
        <ul>
            <li> <a class="active" href="#home"> <i class="fa fa-home"></i> Home </a> </li>
            <li> <a href="#about"> <i class="fa fa-user"></i> About Us</a> </li>
            <li> <a href="#stream"> <i class="fa fa-book"></i> Streams </a> </li>
            <li> <a href="#search"> <i class="fa fa-search"></i> Search </a> </li>
            <li> <a href="#contact"> <i class="fa fa-phone"></i> Contact Us </a> </li>
        </ul> 
    </nav>   

    <div id="login" class="fas fa-user-circle"> </div>
	
</header>  
	<a href="bmm_uploadfile.php"><button class="btn-n">Upload Files</button></a>
</body>
</html>
<?php

$files = scandir("bmm_upload");
for ($a = 2; $a < count($files); $a++){
	//displaying links to download
	//making it downloadable
	?>
	<p class="p1">
		<a  download="<?php echo  $files[$a]?>" href="bmm_upload/<?php echo  $files[$a]?>"><?php echo $files[$a]?></a>
	</p><br>
	<?php
}
?>