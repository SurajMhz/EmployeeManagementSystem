<?php
require '../DatabaseConnection/database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $User_name = $_POST['User'];
    $Password = $_POST['Password'];
    $sql = "INSERT INTO students (UserName, Password) VALUES ('$User_name', '$Password')";
    if ($conn->query($sql) === TRUE) {
       header("Location: ../Login/LoginPage.php?success=true");
       exit();
    } else {
        header("Location: RegisterPage.php?error=true");
        exit();
    }
}
?>
