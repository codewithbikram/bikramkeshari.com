<?php
session_start();
if(isset($_SESSION['status'])){
	?>
<html>
<head>
<title>admin</title>
<meta name="viewport" content="width=device-width" />
<meta name="theme-color" content="green" />
<link rel="icon" href="favicon.png" />
<link rel="shortcut icon" href="favicon.png" />
<link rel="stylesheet" href="admin.css" />
<script src="home.js"></script>
</head>
<body>
<div id="heading">WELCOME TO ADMIN PAGE</div>
<div id="links">
<a href="visitors.php" target="frame">VISITORS</a>
<a href="feedback.php" target="frame">FEEDBACKS</a>
<a href="trending.php" target="frame">TRENDINGS</a>
<a href="addtrending.php" target="frame">ADD TRENDING</a>
<a href="top10.php" target="frame">ADD TOP10</a>
<a href="change.php">CHANGE PASSWORD</a>
<a href="logout.php">LOGOUT</a>
</div>
<iframe name="frame" src="visitors.php">
</iframe>
<div id="menu" onclick='menu("links")'><div id="l1"></div><div id="l2"></div><div id="l3"></div></div>
</body>
</html>
<?php }
else{
	header("Location:login.php");
}
?>
	