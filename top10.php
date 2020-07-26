<?php
session_start();
date_default_timezone_set("asia/calcutta");
if(isset($_SESSION['status'])){
	if(isset($_POST['submit'])){
	$con=new mysqli("localhost","bikramkeshari","Bikram#321","bikramkeshari");
	if($con->connect_error){
		die("error:".$con->connect_error);
	}
	$heading=$_POST['heading'];
	$t0=$_POST['t0'];
	$t1=$_POST['t1'];
	$t2=$_POST['t2'];
	$t3=$_POST['t3'];
	$t4=$_POST['t4'];
	$t5=$_POST['t5'];
	$t6=$_POST['t6'];
	$t7=$_POST['t7'];
	$t8=$_POST['t8'];
	$t9=$_POST['t9'];
	$table=$_POST['topic'];
	$date=date("d.m.y h.i.s a l");
	$stmt="update $table set status=0;";
	$stmt .="insert into $table (heading,one,two,three,four,five,six,seven,eight,nine,ten,date,status)";
	$stmt .="values('$heading','$t0','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$date',1);";
	if($con->multi_query($stmt)===false){
	echo "error:".$con->error;
}
	$con->close();
	}
	?>
<html>
<head>
<title>add top10</title>
<meta name="viewport" content="width=device-width" />
<link rel="icon" href="favicon.png" />
<link rel="shortcut icon" href="favicon.png" />
<link rel="stylesheet" href="addtrending.css" />
</head>
<body>
<div>TOP-10</div>
<form method="post" action="<?php $PHP_SELF ?>">
<input type="text" name="heading" required placeholder="heading" />
<input type="text" name="t0" required placeholder="top0" />
<input type="text" name="t1" required placeholder="top1" />
<input type="text" name="t2" required placeholder="top2" />
<input type="text" name="t3" required placeholder="top3" />
<input type="text" name="t4" required placeholder="top4" />
<input type="text" name="t5" required placeholder="top5" />
<input type="text" name="t6" required placeholder="top6" />
<input type="text" name="t7" required placeholder="top7" />
<input type="text" name="t8" required placeholder="top8" />
<input type="text" name="t9" required placeholder="top9" />
<input type="radio" name="topic" value="top1"/>
<input type="radio" name="topic" value="top2"/>
<input type="radio" name="topic" value="top3"/>
<input type="radio" name="topic" value="top4"/>
<input type="radio" name="topic" value="top5"/>
<input type="submit" name="submit" />
</form>
</body>
<?php
}else{
	header('Location:login.php');
}
?>