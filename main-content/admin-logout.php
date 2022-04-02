<?php
    session_start();
    unset($_SESSION[ 'admin_full_name' ]);
    unset($_SESSION['admin_id']);
    unset($_SESSION['admin-logged-in']);
    header("location:login.php");
?>
