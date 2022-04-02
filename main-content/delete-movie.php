<?php
    include "database_configuration.php";
    if($_POST){
        $id = $_POST['id'];
        $sql= "DELETE FROM `movies_details` where `id`=$id";
        if(mysqli_query($conn,$sql)){
            session_start();
            $_SESSION['alert'] = true;
            $_SESSION['dalert'] = '<script>alert("Movie deleted successfully")</script>';
            header("location:movies.php");
        }
        else{
            echo'<script>alert("Couldn`t delete movie")</script>';
            // header("location:movies.php");
        }
    }

?>