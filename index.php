<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel = "stylesheet" href = "Style.css">
</head>
<body>
    <div class="container">
        <h2 style = "text-align:center; "><b>Please enter your login credentials:</b></h2>
        <form method = "post" action="Login.php">
<label for="username"><b>Enter UserName or Email</b></label>
<input type="text" placeholder="UserName" name="username">
<label for="password"><b>password</b></label>
<input type="password" placeholder="password" name="passsword">
<button>Submit</button>
<li><a href="Signup.php">Register</a></li>
        </form>

    </div>
</body>
</html>