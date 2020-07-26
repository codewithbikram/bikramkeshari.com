<?php
date_default_timezone_set("Asia/Calcutta");
$date=date('d.m.y h.i.s a l',$_SERVER['REQUEST_TIME']);
$browser=$_SERVER['HTTP_USER_AGENT'];
$ip=$_SERVER['REMOTE_ADDR'];
$con=new mysqli("localhost","bikramkeshari","Bikram#321","bikramkeshari");
if($con->connect_error){
        echo $con->connect_error;
	echo "<script>alert('Sorry!Major Contents are missing.');</script>";
}
else{
	if(!isset($_COOKIE['id'])){
$stmt="insert into visitors(agent,ip,date)values('$browser','$ip','$date')";
$con->query($stmt);
	}
if(isset($_POST['submit'])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
$stmt="insert into users(name,phone,email,feedback,date) values('$name','$phone','$email','$feedback','$date')";
if($con->query($stmt)===true){
echo "<script>alert('Thank You For Your Feedback');</script>";
}
}
}
echo $con->error;
setcookie("id","visitor",time() + (86400 * 30));
?>
<html>
<head>
<title>Bikram Keshari</title>
<meta name="description" content="This is the personal website of Bikram Keshari" />
<meta name="keywords" content="Bikram,keshari,Maharana,Utkal University,Vani vihar,Angul,Odisha,Odia" />
<meta name="author" content="Bikram Keshari" />
<meta name="viewport" content="width=device-width" />
<meta name="theme-color" content="#000">
<link rel="icon" href="favicon.png" />
<link rel="shortcut icon" href="shortcut.png" />
<link rel="stylesheet" media="screen and (max-width:720px)" href="mobile.css" />
<link rel="stylesheet" media="screen and (min-width:720px)" href="home.css" />
</head>
<body onscroll="scroll()" onload="intro()">
<!--Links To Body Section-->
<div id="div0">
<a href="#b1" onclick="show('div30')">TRENDING</a>
<a href="#b2" onclick="show('div31')">TOP</a>
<a href="#b3" onclick="show('div32')">DETAILS</a>
<a href="#b4" onclick="show('div33')">TWEETS</a>
<a href="login.php" target="_blank">ADMIN</a>
<a href="#div4">CONTACT</a>
</div>
<div id="div1"><div id="div10">Still Loading...</div></div>
<div id="div2">
<div id="div21">
<h3>A Little About Me</h3>
<p>I am a web Programmer,a Android app developer.</p>
<p>Also a Computer Science Student.</P> 
</div>
<img src="bikram.jpg" alt="bikram's photo"/>
</div>
<div id="gap1"></div>
<!--Main Section-->
<button id="b1" onclick="panel(this)">TRENDING</button>
<!--General Guide-->
<div id="div30">
<a href="https://api.whatsapp.com/send?text=Check%20out%20IT%20related%20trending%20article%20at%20this%20link.%0A%0Ahttp://bikramkeshari.in/"><img src="whatsapp.png" alt="share" id="whatsapp" /></a>
<?php
$stmt="select * from trending where status=1";
$result=$con->query($stmt);
for($i=0;$i<$result->num_rows;$i++){
	$row=$result->fetch_row();
echo "<h3>".$row[1]."</h3>";
echo "<p>".$row[2]."</p>";
echo "<p>".$row[3]."</p>";
echo "<p>".$row[4]."</p>";
}
?>
</div>
<button id="b2" onclick="panel(this)">TOP 10</button>
<div id="div31">
<a href="https://api.whatsapp.com/send?text=Top-10%20in%20IT%20Check%20at%20this%20link.%0A%0Ahttp://bikramkeshari.in/"><img src="whatsapp.png" alt="share" id="whatsapp" /></a>
<?php
$stmt1="select * from top1 where status=1";
$result1=$con->query($stmt1);
$stmt2="select * from top2 where status=1";
$result2=$con->query($stmt2);
$stmt3="select * from top3 where status=1";
$result3=$con->query($stmt3);
$stmt4="select * from top4 where status=1";
$result4=$con->query($stmt4);
$stmt5="select * from top5 where status=1";
$result5=$con->query($stmt5);
if($result1->num_rows<2 and $result1->num_rows<2 and $result1->num_rows<2 and $result1->num_rows<2 and $result1->num_rows<2){
	$row1=$result1->fetch_row();
	$row2=$result2->fetch_row();
	$row3=$result3->fetch_row();
	$row4=$result4->fetch_row();
	$row5=$result5->fetch_row();
echo "<table>";
echo "<tr><th>".$row1[1]."</th><th>".$row2[1]."</th><th>".$row3[1]."</th><th>".$row4[1]."</th><th>".$row5[1]."</th></tr>";
echo "<tr><td>".$row1[2]."</td><td>".$row2[2]."</td><td>".$row3[2]."</td><td>".$row4[2]."</td><td>".$row5[2]."</td></tr>";
echo "<tr><td>".$row1[3]."</td><td>".$row2[3]."</td><td>".$row3[3]."</td><td>".$row4[3]."</td><td>".$row5[3]."</td></tr>";
echo "<tr><td>".$row1[4]."</td><td>".$row2[4]."</td><td>".$row3[4]."</td><td>".$row4[4]."</td><td>".$row5[4]."</td></tr>";
echo "<tr><td>".$row1[5]."</td><td>".$row2[5]."</td><td>".$row3[5]."</td><td>".$row4[5]."</td><td>".$row5[5]."</td></tr>";
echo "<tr><td>".$row1[6]."</td><td>".$row2[6]."</td><td>".$row3[6]."</td><td>".$row4[6]."</td><td>".$row5[6]."</td></tr>";
echo "<tr><td>".$row1[7]."</td><td>".$row2[7]."</td><td>".$row3[7]."</td><td>".$row4[7]."</td><td>".$row5[7]."</td></tr>";
echo "<tr><td>".$row1[8]."</td><td>".$row2[8]."</td><td>".$row3[8]."</td><td>".$row4[8]."</td><td>".$row5[8]."</td></tr>";
echo "<tr><td>".$row1[9]."</td><td>".$row2[9]."</td><td>".$row3[9]."</td><td>".$row4[9]."</td><td>".$row5[9]."</td></tr>";
echo "<tr><td>".$row1[10]."</td><td>".$row2[10]."</td><td>".$row3[10]."</td><td>".$row4[10]."</td><td>".$row5[10]."</td></tr>";
echo "<tr><td>".$row1[11]."</td><td>".$row2[11]."</td><td>".$row3[11]."</td><td>".$row4[11]."</td><td>".$row5[11]."</td></tr>";
echo "</table>";
}
?>
</div>
<button id="b3" onclick="panel(this)">YOUR DETAILS</button>
<div id="div32">
<a href="https://api.whatsapp.com/send?text=Your%20Internet%20and%20device%20details.Check%20at%20this%20link.%0A%0Ahttp://bikramkeshari.in/"><img src="whatsapp.png" alt="share" id="whatsapp" /></a>
<table>
<?php
echo "<tr><td>Login Time</td><td>$date</td></tr>";
echo "<tr><td>Browser Details</td><td>$browser</td></tr>";
echo "<tr><td>IP</td><td>$ip</td></tr>";
echo "<tr><td>Screen Width</td><td><script>document.write(screen.width)</script>px</td></tr>";
echo "<tr><td>Screen Height</td><td><script>document.write(screen.height)</script>px</td></tr>";
echo "<tr><td>Color Depth</td><td><script>document.write(screen.colorDepth)</script>bits</td></tr>";
echo "<tr><td>Pixel Depth</td><td><script>document.write(screen.pixelDepth)</script>bits</td></tr>";
?>
</table>
</div>
<button id="b4" onclick="panel(this)">TWEETS</button>
<div id="div33">
<a href="https://api.whatsapp.com/send?text=Tweets%20from%20major%20IT%20firms%20and%20Persons%20at%20below%20link.%0A%0Ahttp://bikramkeshari.in/"><img src="whatsapp.png" alt="share" id="whatsapp" /></a>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/Google?ref_src=twsrc%5Etfw">Tweets by Google</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/Oracle?ref_src=twsrc%5Etfw">Tweets by Oracle</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/Microsoft?ref_src=twsrc%5Etfw">Tweets by Microsoft</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/intel?ref_src=twsrc%5Etfw">Tweets by intel</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/facebook?ref_src=twsrc%5Etfw">Tweets by facebook</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/IBM?ref_src=twsrc%5Etfw">Tweets by IBM</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/Cisco?ref_src=twsrc%5Etfw">Tweets by Cisco</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/TCS?ref_src=twsrc%5Etfw">Tweets by TCS</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/Infosys?ref_src=twsrc%5Etfw">Tweets by Infosys</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/Wipro?ref_src=twsrc%5Etfw">Tweets by Wipro</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/PMOIndia?ref_src=twsrc%5Etfw">Tweets by PMOIndia</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a class="twitter-timeline" data-width="33.33%" data-height="40%" href="https://twitter.com/rsprasad?ref_src=twsrc%5Etfw">Tweets by rsprasad</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<div id="gap2"></div>
<div id="div4">
<div id="div41">Give Your Feedback<br /> and <br />suggestion here<br >or <br />you can ask anything.</div>
<form method="post" action="<?php $PHP_SELF ?>">
<input type="text" name="name" required placeholder="Your Name" />
<input type="phone" name="phone" required placeholder="Phone Number" />
<input type="email" name="email" required placeholder="E-mail ID" />
<textarea name="feedback" required placeholder="Write Something..."></textarea>
<input type="submit" name="submit"/>
</form>
</div>
<!--End Of Main Section-->
<div id="div5">
<div id="div50">
<div id="div550"><a href="terms.html" target="_blank" >Terms & Condition</a><br><a href="policy.html" target="_blank">Privacy Policies</a></div>
<div id="div551"><a href="https://twitter.com/talk2bikram/" target="_blank">Twitter</a><br><a href="https://facebook.com/dsbdgroup/" target="_blank">Facebook</a></div>
<div id="div552"><a href="http://festivewish.in/"target="_blank">Festivewish.in</a><br><a href="" target="_blank">Downloads</a></div>
</div>
</div>
<div id="menu" onclick='menu("div0")'><div id="l1"></div><div id="l2"></div><div id="l3"></div></div>
<button id="top" onclick="up()">TOP</button>
<script src="home.js"></script>
</body>
</html>
<?php $con->close() ?>