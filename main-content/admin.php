<?php 
    session_start();
    if ( $_SESSION[ 'admin-logged-in' ] == false ) {
        header( 'location:login.php' );
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/admin-style.css">
    <script src="https://kit.fontawesome.com/c45811900b.js" crossorigin="anonymous"></script>
    <title>Admin Dashboard</title>
</head>
<body>
<div class="admin_nav">
    <h1>Cinema Time</h1>
    <ul class="admin_nav_menu">
        
        <a href="admin-profile.php" class="admin_nav_link">
            <div class="admin_nav_item">
                <i class="fa-solid fa-user"></i>
                <li>Profile</li>
            </div>
        </a>
        <a href="genre.php" class="admin_nav_link">
            <div class="admin_nav_item">
            <i class="fa-solid fa-file-lines"></i>
            <li>Genre</li>
            </div>
        </a>
        <a href="users.php" class="admin_nav_link">
            <div class="admin_nav_item">
                <i class="fa-solid fa-users"></i>
                <li>Users</li>
            </div>
        </a>
        <a href="movies.php" class="admin_nav_link">
            <div class="admin_nav_item">
                <i class="fa-solid fa-clapperboard"></i>
                <li>Movies</li>
            </div>
        </a>
        <a href="logout.php" class="admin_nav_link">
        <div class="admin_nav_item">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <li class="bottom_item">Logout</li>
            
        </div>
        </a>
    </ul>
</div>
</body>
</html>
