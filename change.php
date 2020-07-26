<?php
session_start();
date_default_timezone_set("asia/calcutta");
if(isset($_POST['check'])){
	$con=new mysqli("localhost","bikramkeshari","Bikram#321","bikramkeshari");
	if($con->connect_error){
		die("error:".$con->connect_error);
	}
	$user=$_POST['user'];
	$pass=$_POST['pass'];	
	$stmt="select * from admin where username='$user' and password='$pass' and status=1";
	$result=$con->query($stmt);
	if($result->num_rows===1){
	$row=$result->fetch_row();
	$_SESSION['user']=$row[1];
	}
	$con->close();
}
if(isset($_POST['change'])){
	$con=new mysqli("localhost","bikramkeshari","Bikram#321","bikramkeshari");
	if($con->connect_error){
		die("error:".$con->connect_error);
	}
	$user=$_POST['user'];
	$pass=$_POST['cpass'];	
	$date=date("d.m.y h.i.s a l");
	$stmt="update admin set status=0;"."insert into admin(username,password,date,status) values('$user','$pass','$date',1);";
    $con->multi_query($stmt);
	$_SESSION['status']=null;
	$_SESSION['user']=null;
	$con->close();
	header('Location:login.php');
}
if(isset($_SESSION['status']) and isset($_SESSION['user'])){?>
<html>
<head>
<title>pass change</title>
<meta name="viewport" content="width=device-width" />
<link rel="icon" href="favicon.png" />
<link rel="shortcut icon" href="favicon.png" />
<link rel="stylesheet" href="login.css" />
<script language="javascript" src="change.js" ></script>
</head>
<body>
<div>CHANGE PASSWORD</div>
<form method="post" action="<?php $PHP_SELF ?>" onsubmit="return check()">
<input type="text" name="user" required value="<?php echo $_SESSION['user'] ?>" />
<input type="password" name="npass" id="npass" required placeholder="new password" />
<input type="password" name="cpass" id="cpass" required placeholder="conform password" />
<input type="submit" name="change" />
</form>
</body>
</html>
<?php
}
	else if(isset($_SESSION['status'])){
	?>
<html>
<head>
<title>recover</title>
<meta name="viewport" content="width=device-width" />
<link rel="icon" href="favicon.png" />
<link rel="shortcut icon" href="favicon.png" />
<link rel="stylesheet" href="login.css" />
</head>
<body>
<div>RECOVER</div>
<form method="post" action="<?php $PHP_SELF ?>">
<input type="text" name="user" required placeholder="user name" />
<input type="password" name="pass" required placeholder="current password" />
<input type="submit" name="check" />
</form>
</body>
</html>
<?php
}else{
	header('Location:login.php');
}
?>