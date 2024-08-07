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

    <a href="main_u.php" class="logo"> <i class="fas fa-user-graduate"> </i> VLEARN </a>

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

<!--header section ends-->

<!--login form -->

<div class="login-form">

    <form action="">
        <h3>Login</h3>
        <input type="email" placeholder="username" class="box">
        <input type="password" placeholder="password" class="box">
        <p>Forgot password? <a href="#">Click here</a></p>
        <p>Don't have an account? <a href="#">Register now</a></p>
        <input type="submit" class="btn" value="login">
        <i class="fas fa-times"></i>
    </form>

</div>

<!--home section starts-->

<section class="home" id="home">

    <h1>VLEARN</h1>
    <p>Our website VLearn is one such LMS where students from across all streams such as Science, Commerce and Arts will be able to access study material for their respective semesters.</p>
    <a href="main_u.php#stream"><button class="btn"> Get Started </button> </a>

    <div class="shape"></div>

</section>

<!--home section ends-->

<!--about section starts-->

<section class="about" id="about">

    <div class="image">
        <img src="images/about.jpg" alt="">
    </div>

    <div class="content">
        <h3> Why choose us? </h3>
        <p> This website will prove to be useful because it is not always possible for students to attend all lectures whether online or offline because of issues such as internet dropouts, falling sick or not being able to travel. In such cases when the students find it difficult to receive notes this website will allow them to continue their pace of studying and not have backlogs. It will also help them to prepare for exams with the help of the solved test papers. Also when students miss lectures and do not understand a particular topic they resort to the internet and youtube to help them get through. So instead of spending hours browsing for reliable and correct content, the students can access videos and links to the required topic at hand.</p>
        
        <a href="https://en.wikipedia.org/wiki/Learning_management_system"> <button class="btn">Learn more</button> </a>
    </div>

</section>

<!--about section ends-->

<!--stream section starts-->

<section class="stream" id="stream">

<h1 class="heading"> Choose your stream </h1> 

<div class="box-container">

    <div class="box">
        <img src="images/science.jpg" alt="">
        
        <div class="content">
            
            <a href="science.php" class="title">Science</a>
            <div class="info">
                <h3> <i class="fas fa-book"></i> 3 courses available </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/commerce.jpg" alt="">
        
        <div class="content">
            
            <a href="commerce.php" class="title">Commerce</a>
            <div class="info">
                <h3> <i class="fas fa-book"></i> 2 courses available </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/arts.png" alt="">
        
        <div class="content">
            
            <a href="arts.php" class="title">Arts</a>
            <div class="info">
                <h3> <i class="fas fa-book"></i> 2 courses available </h3>
            </div>
        </div>
    </div>

</div>

</section>

<!--stream section ends-->

<!--search section starts-->

<section class="search" id="search">
    <h1 class="heading"> Search redirects to google </h1> 

    <div class="container">

        <form action="https://www.google.com/search" method="get" class="search-bar">
            <input type="text" placeholder="search anything" name="q">
            <button type="submit"><img src="images/mgg.png"></button>
        </form>

    </div>

</section>

<!--search section ends-->

<!--contact section starts-->

<section class="contact" id="contact">

    <h1 class="heading"> Contact us</h1>
    <?php
    $message_sent= false;
    if(isset($_POST['email']) && $_POST['email'] !=''){
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            
            // submit the form
            $userName= $_POST['name'];;
            $userEmail= $_POST['email'];
            $userpassword= $_POST['password'];
            $messageSubject= $_POST['subject'];
            $message= $_POST['message'];

            $to= "rachelcabral0903@gmail.com:";
            $body= "";

            $body .= "From: ".$userName. "\r\n"; 
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            mail($to, $messageSubject, $body);

            $message_sent= true;
        }

    }

?>
    <?php
    if($message_sent):
    ?>  
        
        <h3> Thanks, we'll be in touch. </h3>
    
    <?php
    else:
    ?>    

    <div class="row" method="POST" class="form">

        <form action="index.php#contact">
            <input type="text" placeholder="full name" class="box" name="name" id="name">
            <input type="email" placeholder="your email" class="box" name="email" id="email">
            <input type="password" placeholder="your password" class="box" name="password" id="password">
            <input type="text" placeholder="subject" class="box" name="subject" id="subject">
            <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="Enter message" name="message" id="message"> </textarea> 
            <input type="submit" class="btn" value="Send now">
        </form>

        <div class="image">
            <img src="images/contact1.webp" alt="">
        </div>
    </div>

    <?php
        endif;
        ?>

</section>

    

<!--contact section ends-->

<!--footer section starts-->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#stream">streams</a>
            <a href="#search">search</a>
            <a href="#contact">contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> India, Mumbai 401107. </p>
            <p> <i class="fas fa-envelope"></i> rachelcabral0903@gmail.com <br> dhokeshreya18@gmail.com</p>
            <p> <i class="fas fa-phone"></i> +917506460415 <br> +918450924573</p>
        </div>

    </div>

    <h1 class="credit">created by <a href="#">Raya</a>| all rights reserved. </h1>

</div>

<!--footer section ends-->

<!-- jquery cdn link  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>

<!-- custom js file link  -->

<script src="js/script.js"> </script>

</body>
</html>    