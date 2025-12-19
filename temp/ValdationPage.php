<?php
$UserName=$_GET['User'];
$Password=$_GET['Password'];

$users=[];

$file=fopen("LoginInfo.txt","r") or die("Unable to open file");

while(($line=fgets($file))!==false){
	$data=explode(",",$line);
	if(count($data)==2){
		$user=trim($data[0]);
		$pass=trim($data[1]);
		$users[$user]=$pass;
	}
}
fclose($file);

$valid=false;

foreach($users as $u=>$p){
	if($UserName==$u && $Password==$p){
		$valid=true;
		break;
	}
}

if($valid){
    session_start();
    $_SESSION['username']=$UserName;
	header("Location: Dashboard.php");
	exit();
}else{
	header("Location: loginPage.php?invalid=true");
	exit();
}
?>
