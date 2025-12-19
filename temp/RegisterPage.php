<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    @import url('https://fonts.googleapis.com/css?family=Rethink%20Sans:700|Rethink%20Sans:400');

    body {
        font-family: 'Rethink Sans';
        font-weight: 400;
        display: flex;
        flex-direction: column;
        width: 100vw;
        height: 100vh;
        justify-content: center;
        align-items: center;
        background-color: #aab7bb;
    }

    .RegisterForm {
        display: flex;
        align-content: center;
        /* justify-content: space-between; */
        flex-direction: column;
        background-color: #988581;
        height: 350px;
        width: 300px;
        padding: 10px;
        border: 2px solid #9994a8;
        border-radius: 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 80px;
    }
</style>

<body>
    <form action="AddLoginInfo.php" method="get" class="RegisterForm">
        <h1>New Register</h1>
        <label for="User">Enter Your UserName</label>
        <input type="text" id="User" name="User" required>
        <br>
        <label for="Password">Create Your Password</label>
        <input type="Password" id="Password" name="Password" required>
        <br>
        <button type="submit">Register</button>
        <a href="LoginPage.php">Already have an account?</a>
        
    </form>
    <!-- <h3><?php# if(isset($_GET['invalid'])){echo "Invalid Data Input";};?></h3> -->
</body>

</html>