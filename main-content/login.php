<?php

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login-style.css">
</head>

<body>
    <div class='main-div'>
        <form action='' method='POST' id='login-form' onsubmit="event.preventDefault();login_validation()">
            <label for='user-name'>User Name</label>
            <input type='text' name="user-name" placeholder="Enter your username">
            <span class="error-message" id="user-name-validation"></span>
            <label for='password'>Password</label>
            <input type='password' name="password" placeholder="Enter your password">
            <span class="error-message" id="password-validation"></span>
            <span id="backend-error-message"></span>
            <input type="submit" value="Login">
            <hr>
            <p>Don't have an account</p>
            <button><a href="sign-up.php">Create an account</a></button>
        </form>
    </div>
</body>

</html>