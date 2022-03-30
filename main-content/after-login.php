<?php

include 'database_configuration.php';
$sql = 'SELECT DISTINCT country from movies_details';
$result = mysqli_query( $conn, $sql );
$countries = mysqli_fetch_row( $result );
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Cinema Time</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel='stylesheet' href='../CSS/after-login.css'>

</head>

<body>
    <nav class='navbar'>
        <img src='text-logo.png' alt=''>
        <div class="dropdown-list">
            <ul>
                <li>Country
                    <ul>
                        <li>ABCCC</li>
                        <li>ABCCC</li>
                        <li>ABCCC</li>
                        <li>ABCCC</li>
                    </ul>
                </li>
                <li>Genre
                    <ul>
                        <li>WXYZZZ</li>
                        <li>WXYZZZ</li>
                        <li>WXYZZZ</li>
                        <li>WXYZZZ</li>
                    </ul>

                </li>
            </ul>
        </div>
        <div class="search-bar">
            <form action="" method="POST">
                <input type="text" placeholder="Search.....">
                <input type="submit" value="Search">
            </form>
        </div>
        <!-- <div class="user-info">
            <span><?=$_SESSION['user-name']?></span>
        </div> -->
    </nav>
    <div class="container">
        <div class="items"></div>
    </div>
</body>

</html>