 <?php
	

	
	
	$conn= mysqli_connect("localhost","root","","vlearn");

	if(isset($_POST['user']))
	{
		$uname=$_POST['user'];
		$pass=$_POST['password'];
		
		$sql="SELECT username,password FROM user where username='".$uname."' && password='".$pass."' limit 1";
		$result= mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result)==1)
		{
			require("index.php");
		
		}
		else
		{
			echo "You have entered incorrect password or username";
			exit();
		}
	}
?>