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
    <link rel="stylesheet" href="style1.css">
    
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
	<div class="file__upload">
		<div class="header">
			<p><i class="fa"></i><span><b>upload</b></span></p>			
		</div>
		<form action="a_it_try.php" method="POST" enctype="multipart/form-data" class="body">
			
			<input type="file" name="file[]" id="upload" multiple  required>
			<label for="upload">
				<i class="fa "></i>
				<p>
					<strong>Drag and drop</strong> files here<br>
					or <span>browse</span> to begin the upload
				</p>
			</label>
			<button name="upload" class="btn">Upload</button>
			
		</form>
	</div>  
</body>
</html>