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
    <link rel="stylesheet" href="css/style.css">
    
</head> 
<body>

<!--header section starts-->

<header>

    <div id="menu" class="fas fa-bars"> </div>

    <a href="index.php" class="logo"> <i class="fas fa-user-graduate"> </i> VLEARN </a>

    <nav class="navbar">
        <ul>
            <li> <a class="active" href="index.php#home"> <i class="fa fa-home"></i> Home </a> </li>
            <li> <a href="index.php#about"> <i class="fa fa-user"></i> About Us</a> </li>
            <li> <a href="index.php#stream"> <i class="fa fa-book"></i> Streams </a> </li>
            <li> <a href="index.php#search"> <i class="fa fa-search"></i> Search </a> </li>
            <li> <a href="index.php#contact"> <i class="fa fa-phone"></i> Contact Us </a> </li>
        </ul>  
    </nav>   

    <div id="login" class="fas fa-user-circle"> </div>

</header>    

<!--header section ends-->

<!--notes section starts-->

<section class="notes">
    <h1> Study material for BMM Sem 5</h1>

    <div class="row">
        <div class="notes-col">
            <img src="images/not.png">
            <div class="layer">
                <h3><a href="bmm5_n.php"> NOTES </a></h3>
            </div>
        </div>

        <div class="notes-col">
            <img src="images/vv.png">
            <div class="layer">
                <h3><a href="bmm5_v.php"> VIDEOS </a></h3>
            </div>
        </div>

        <div class="notes-col">
            <img src="images/testp.png">
            <div class="layer">
                <h3><a href="bmm5_ts.php"> TEST PAPERS & SOLUTIONS </a></h3>
            </div>
        </div>
    </div>

</section>

<!--notes section ends-->

<!-- jquery cdn link  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>

<!-- custom js file link  -->

<script src="js/script.js"> </script>

</body>
</html>