<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sign-up-style.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="main-div">
        <form action="" method="POST" onsubmit="event.preventDefault();sign_up_validation()">
            <label for="full-name">Full Name</label>
            <input type="text" name="full-name" id="full-name" placeholder="John Smith">
            <span class="error-message" id="user-name-validation"></span>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="johnsmith@gmail.com">
            <span class="error-message" id="email-validation"></span>
            <label for="full-name">User Name</label>
            <input type="text" name="user-name" id="user-name" placeholder="johnsmith">
            <span class="error-message" id="user-name-validation"></span>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Create a password">
            <span class="error-message" id="password-validation"></span>
            <label for="confirm-password">Confirm Password</label>
            <input type="password" name="confirm-password" id="confirm-password" placeholder="Re-enter your password">
            <span class="error-message" id="confirm-password-validation"></span>
            <span class="backend-error-message"></span>
            <input type="submit" value="Sign Up">
            <p>Already have an account <a href="login.php">Proceed to Login</a></p>
        </form>
    </div>
</body>
</html>