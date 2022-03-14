<?php

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>CInema Time-Login</title>
    <style>
    
    form{
        display: flex;
        flex-direction:column;
    }

    </style>
</head>

<body>
    <div class='main-div'>
        <form action='' method='POST' id='login-form'>
            <label for='full-name'>Full Name</label>
            <input type='text'>
            <label for='email'>Email</label>
            <input type='text'>
            <label for='user-name'>User Name</label>
            <input type='text'>
            <label for='password'>Password</label>
            <input type='password'>
            <label for='confirm-password'>Confirm Password</label>
            <input type='password'>
        </form>
    </div>
</body>

</html>