<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/css/LoginPage.css">
</head>
<body>
    <form action="LoginFromDatabase.php" method="post" class="LoginForm">
        <h1>LOG IN</h1>
        <label for="User">Enter Your UserName</label>
        <input type="text" id="User" name="User" required>
        <br>
        <label for="Password">Enter Your Password</label>
        <input type="Password" id="Password" name="Password" required>
        <br>
        <button type="submit">Log In</button>
        <a href="../Register/RegisterPage.php">Don't have an account?</a>
        
    </form>
    <h3><?php
    if(isset($_GET['invalid'])){echo "Invalid Data Input";};
    if(isset($_GET['success'])){echo "Registration Successful. Please Log In";};
     ?></h3>
</body>

</html>