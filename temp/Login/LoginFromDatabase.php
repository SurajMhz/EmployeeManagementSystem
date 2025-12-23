<?php
require '../database.php';
session_start();

$UserName=$_POST['User'];
$Password=$_POST['Password'];

$sql="SELECT * FROM students WHERE username='$UserName' AND password='$Password'";
$result=$conn->query($sql);

if($result && $result->num_rows==1){
	$_SESSION['username']=$UserName;
	header("Location: ../Dashboard.php");
	exit();
}

header("Location: LoginPage.php?invalid=true");
exit();
?>
