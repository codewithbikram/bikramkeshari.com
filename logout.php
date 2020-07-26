<?php
session_start();
if(isset($_SESSION['status'])){
$_SESSION['status']=null;
}
header('Location:login.php');
?>