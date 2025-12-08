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

    .LoginForm {
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
    <form action="ValdationPage.php" method="get" class="LoginForm">
        <h1>LOG IN</h1>
        <label for="User">Enter Your UserName</label>
        <input type="text" id="User" name="User" required>
        <br>
        <label for="Password">Enter Your Password</label>
        <input type="Password" id="Password" name="Password" required>
        <br>
        <button>Log In</button>

    </form>
</body>

</html>