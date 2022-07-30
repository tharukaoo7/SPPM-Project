<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="../../css/RegisterCss/Regis.css">
</head>

<body>
		
	<div class="mainl">
	<div class="log">
		
		<img src="../../image/user.png"class="prof">
		<h1>Register Now</h1>
		
	
		<form action="Reg.php" method="post">
			
            <p>Name</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
			<p>Register ID</p>
            <input type="text" name="rejid" placeholder="Enter Rejester id">
			 <p>Password</p>
            <input type="text" name="password" placeholder="Enter Password">
            <p>Confirm Password</p>
            <input type="text" name="cpassword" placeholder="Renter Password">
            <input type="submit" name="submit" value="Register">   
		</form>
		<?php
	if(isset($_POST["submit"])){
		
		$fullname=$_POST["username"];
		$email=$_POST["email"];
		$mobilenum=$_POST["mobilenum"];
		$password=$_POST["password"];
		
		$con=mysqli_connect("localhost","root","","musicdb");
		if(!$con)
		{
			die("sorry ! unable to connect" );
		}
		
		$sql="INSERT INTO `tblusers` (`fullname`, `email`, `phonenum`, `password`) VALUES ('$fullname', '$email', '$mobilenum', '$password');";
		
       $resalt = mysqli_query($con,$sql);
		if($resalt){
			echo "<script>alert('you have succesful register')
			</script>";
			header('Location:loging.php');
		}else
			
			echo "<script>alert('sorry!! you have not succesful register')</script>";
		
		}
	?>
		</div>
	
	</div>
</body>
	
	
</html>