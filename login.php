<?php
if(isset($_POST['submit'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$con=new mysqli("localhost","bikramkeshari","Bikram#321","bikramkeshari");
	if($con->connect_error){
		die("unable to connect".$con->connect_error);
	}
	$stmt="select * from admin where username='$user' and password='$pass' and status='1'";
	$result=$con->query($stmt);
	if($result->num_rows===1){
		session_start();
		$_SESSION['status']='valid';
		header("Location:admin.php");
	}
$con->close();	
}
?>
<html>
<head>
<title>login</title>
<meta name="viewport" content="width=device-width" />
<meta name="theme-color" content="blue" />
<link rel="icon" href="favicon.png" />
<link rel="shortcut icon" href="favicon.png" />
<link rel="stylesheet" href="login.css" />
</head>
<body>
<div>ADMIN LOGIN</div>
<form action="<?php $PHP_SELF ?>" method="post">
<input type="text" name="username" required placeholder="username" />
<input type="password" name="password" required placeholder="password" />
<input type="submit" name="submit" />
</form>
</body>
</html>