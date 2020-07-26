<?php
session_start();
date_default_timezone_set("asia/calcutta");
if(isset($_SESSION['status'])){
	if(isset($_POST['submit'])){
	$con=new mysqli("localhost","bikramkeshari","Bikram#321","bikramkeshari");
	if($con->connect_error){
		die("error:".$con->connect_error);
	}
	$topic=$_POST['topic'];
	$para1=$_POST['para1'];
	$para2=$_POST['para2'];
	$para3=$_POST['para3'];
	$date=date("d.m.y h.i.s a l");
	$stmt="update trending set status=0;"."insert into trending(topic,para1,para2,para3,date,status) values('$topic','$para1','$para2','$para3','$date',1);";
	$con->multi_query($stmt);
	echo $con->error;
	$con->close();
	}
	?>
<html>
<head>
<title>add topic</title>
<meta name="viewport" content="width=device-width" />
<link rel="icon" href="favicon.png" />
<link rel="shortcut icon" href="favicon.png" />
<link rel="stylesheet" href="addtrending.css" />
</head>
<body>
<div>TRENDING NOW</div>
<form method="post" action="<?php $PHP_SELF ?>">
<input type="text" name="topic" required placeholder="heading" />
<textarea name="para1" required placeholder="para1" ></textarea>
<textarea name="para2"  placeholder="para2" ></textarea>
<textarea name="para3"  placeholder="para3" ></textarea>
<input type="submit" name="submit" />
</form>
</body>
</html>
<?php
}else{
	header('Location:login.php');
}
?>