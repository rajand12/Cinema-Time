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
    <link rel='stylesheet' href='../CSS/main-content-style.css'>

</head>

<body>
    <nav class='navbar'>
        <img src='text-logo.png' alt=''>
        <ul>
            <li><a>Genre</a>
                <ul>
                    <li><a>Action</a></li>
                    <li><a>Comedy</a></li>
                    <li><a>Family</a></li>
                    <li><a>Sci-Fi</a></li>
                    <li><a>Adventure</a></li>
                    <li><a>Drama</a></li>
                    <li><a>Romance</a></li>
                    <li><a>Thriller</a></li>
                </ul>
            </li>
            <li><a>Country</a>
            
        </li>
        </ul>
    </nav>
</body>

</html>