<?php
session_start();
if(isset($_SESSION['status'])){
$con=new mysqli("localhost","bikramkeshari","Bikram#321","bikramkeshari");
if($con->connect_error){
	die("connection failed:".$con->connect_error);
}
$stmt="select * from users order by id desc";
$result=$con->query($stmt);
$count=$con->affected_rows;
echo "<html><head><title>visitors</title><meta name='viewport' content='width=device-width' /><link rel='stylesheet' href='visitors.css'></head><body><table>";
echo "<tr><th>ID</th><th>NAME</th><th>PHONE</th><th>EMAIL</th><th>FEEDBACK</th><th>TIME</th></tr>";
for($i=0;$i<$result->num_rows;$i++){
	echo "<tr>";
	$row=$result->fetch_row();
	for($j=0;$j<$result->field_count;$j++){
		echo "<td>".$row[$j]."</td>";
	}
	echo "</tr>";
}
echo "</table><div>feedbacks:$count</div></body></html>";
$con->close();

}
else{
header("Location:login.php");
}
?>