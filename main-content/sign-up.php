<?php
$message = "";
$error_message = "";
include "database_configuration.php";
if($_POST){
        $fullName = $_REQUEST['full-name'];
        $email = $_REQUEST['email'];
        $userName = $_REQUEST['user-name'];
        $password = $_REQUEST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $checkUser = "SELECT `user_name` from `user_details` where user_name='$userName'";
        $userResult = mysqli_query($conn,$checkUser);
        $finalResult = mysqli_num_rows($userResult);
        if($finalResult>0){
            $error_message = "User name already exist try another";
        }
        else{
            $createUser = "INSERT into `user_details` (`full_name`,`email`,`user_name`,`password`) VALUES ('$fullName','$email','$userName','$hashedPassword')";
            if(mysqli_query($conn,$createUser)){
                $message = "User created successfully";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .="Content-type:text/html; charset=iso-8859-1"."\r\n";
                $headers .="From: less.secure.email.for.students@gmail.com"."\r\n";
                $subject = "Welcome to Cinema Time";
                $email = "$email";
                $body = "Hello $fullName,<br>You have used this email to sign up to Cinema Time.<br>Regards,<br>Cinema Time Team";
                $sendMail = mail($email,$subject,$body,$headers);
            }
            else{
                $error_message = "Couldn't create user";
            }
        }
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sign-up-style.css">
    <script type="text/javascript" src="../Script/sign_up_validation.js"></script>
    <title>Sign Up</title>
</head>

<body>
    <div class="main-div">
        <form id="signUPForm" action="" method="POST" onsubmit="event.preventDefault();signUpValidation();">
            <label for="full-name">Full Name</label>
            <input type="text" name="full-name" id="full-name" placeholder="John Smith">
            <span class="error-message" id="full-name-validation"></span>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="johnsmith@gmail.com">
            <span class="error-message" id="email-validation"></span>
            <label for="user-name">User Name</label>
            <input type="text" name="user-name" id="user-name" placeholder="johnsmith">
            <span class="error-message" id="user-name-validation"></span>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Create a password">
            <span class="error-message" id="password-validation"></span>
            <label for="confirm-password">Confirm Password</label>
            <input type="password" name="confirm-password" id="confirm-password" placeholder="Re-enter your password">
            <span class="error-message" id="confirm-password-validation"></span>
            <span class="backend-error-message"><?= $error_message?></span>
            <input type="submit" value="Sign Up">
            <span class="backend-success-message"><?= $message?></span>
            <p>Already have an account <a href="login.php">Proceed to Login</a></p>
        </form>
    </div>
</body>

</html>
