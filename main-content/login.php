<?php
session_start();
$error_msg = '';
$error_msg2 = '';
include 'database_configuration.php';
if ( $_POST ) {
    $user_name = $_REQUEST[ 'user-name' ];
    $password = $_REQUEST[ 'password' ];
    $login_check = "SELECT *  from `user_details` where user_name = '$user_name'";
    $result = mysqli_query( $conn, $login_check );
    $check = mysqli_num_rows( $result );
    if ( $check>0 ) {
        $row = mysqli_fetch_assoc( $result );
        $pass = $row[ 'password' ];
        $password_validated = password_verify( $password, $pass );
        if ( $password_validated == true ) {
            if ( $row[ 'is_admin' ] == 1 ) {
                $admin_row = mysqli_fetch_array( $result );
                $_SESSION['admin_full_name'] = $row[ 'full_name' ];
                $_SESSION['admin_id'] = $row['user_id'];
                $_SESSION['admin_email'] = $row['email'];
                $_SESSION['admin-logged-in'] = true;
                header( 'location:admin.php' );
            } else {
                
                $customer_row = mysqli_fetch_array( $result );
                $_SESSION[ 'full_name' ] = $row[ 'full_name' ];
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user-logged-in'] = true;
                header( 'location:after-login.php' );
            }

        } else {
            $error_msg2 = 'Invalid Password';
        }
    } else {
        $error_msg = "User Name doesn't exist";
    }
}
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Login</title>
    <link rel='stylesheet' href='../CSS/login-style.css'>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <script type='text/javascript' src='../Script/login_validation.js'></script>
</head>

<body>
    <div class='main-div'>
        <form id='loginForm' action="" method='POST' onsubmit='event.preventDefault();loginValidation();'>
            <label for='user-name'>User Name</label>
            <input type='text' name='user-name' id='user-name' placeholder='Enter your username'>
            <span class='error-message' id='user-name-validation'></span>
            <span id='backend-error-message'>
                <?=$error_msg2?>
            </span>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' placeholder='Enter your password'>
            <span class='error-message' id='password-validation'></span>
            <span id='backend-error-message'>
                <?=$error_msg2?>
            </span>
            <input type='submit' value='Login'>
            <hr>
            <p>Don't have an account</p>
            <button><a href='sign-up.php'>Create an account</a></button>
        </form>
    </div>
    
</body>

</html>