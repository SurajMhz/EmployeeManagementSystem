<?php
$UserName= $_GET['User'];
$Password= $_GET['Password'];

$ValidUser="ADMIN";
$ValidPassword= "Password";

if($UserName== $ValidUser && $Password== $ValidPassword){    
     header("Location: Dashboard.php");
    exit();
}else{
    header("Location: loginPage.php");
    exit();
}
?>