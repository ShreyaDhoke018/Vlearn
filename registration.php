 <?php
	
	session_start();
	header('location:login.php');
	
	$conn= mysqli_connect("localhost","root","","vlearn");

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$pass = mysqli_real_escape_string($conn,$_POST['password']);
	$fname = mysqli_real_escape_string($conn,$_POST['fname']);
	$lname = mysqli_real_escape_string($conn,$_POST['lname']);
	$gmail = mysqli_real_escape_string($conn,$_POST['gmail']);
	$cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);
	
	// $query = "SELECT * FROM user where username='$name' AND gmail='$gmail' AND password='$pass'";
	
	// stores the query
	// $result = mysqli_query($conn, $query);
	
	// to count no. of rows of how many times the name appears in table
	// $num = mysqli_num_rows($result);
	// if($num == 1)
	// {
		// echo "Username Already Taken ";
	// }
	// else
	// {
		// $reg = "INSERT INTO user(fname,lname,username,gmail,password) 
		// VALUES ('$fname','$lname','$name','$gmail','$pass')";
		// mysqli_query($conn, $reg);
		// echo "Registration successful";
	// }
	

$select = mysqli_query($conn, "SELECT * FROM user WHERE gmail = '$gmail' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0)
   {
      $message[] = 'user already exist'; 
   }
   else
   {
      if($pass != $cpass)
	  {
         $message[] = 'confirm password not matched!';
      }
	  else
	  {
         // $insert = mysqli_query($conn, "INSERT INTO `user`(name, gmail, password) VALUES('$name', '$gmail', '$pass')") or die('query failed');
		 $reg = "INSERT INTO user(fname,lname,username,gmail,password)VALUES ('$fname','$lname','$name','$gmail','$pass')";
		mysqli_query($conn, $reg);
		echo "Registration successful";
	
		}
   }



?>