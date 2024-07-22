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
     <link rel="stylesheet" href="a_deletefile.css">
    
</head> 
<body>

<!--header section starts-->

<header>

    <div id="menu" class="fas fa-bars"> </div>

    <a href="index2.html" class="logo"> <i class="fas fa-user-graduate"> </i> VLEARN </a>

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
	
 <?php
 $conn= mysqli_connect("localhost","root","","vlearn");
$folder = "it_upload/";
$files = scandir($folder);
$files = array_diff(scandir($folder), array('.', '..'));

foreach ($files as $file){
    echo "<p>".$file."</p>";
    echo "<form method='post' action='delete.php'>";
    echo "<input type='hidden' name='file_name' value='".$file."'>";
    echo "<input type='submit' name='delete_file' value='Delete File'>";
    echo "</form>";
}

?>
</body>
</html>

