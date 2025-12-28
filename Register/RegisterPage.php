
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/css/RegisterPage.css">
</head>
<body>
    <form action="AddToDatabase.php" method="Post" class="RegisterForm">
        <h1>New Register</h1>
        <label for="User">Enter Your UserName</label>
        <input type="text" id="User" name="User" required>
        <br>
        <label for="Password">Create Your Password</label>
        <input type="Password" id="Password" name="Password" required>
        <br>
        <button type="submit">Register</button>
        <a href="../Login/LoginPage.php">Already have an account?</a>
        
    </form>
    <h3><?php
     if(isset($_GET['error'])){echo "Error occurred during registration";};
     ?></h3>

</body>

</html>