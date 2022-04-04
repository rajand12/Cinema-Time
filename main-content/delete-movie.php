<?php
    include "database_configuration.php";
    if(isset($_POST)){
        $id = $_POST['id'];
        $sql= "DELETE FROM `movies_details` where `id`=$id";
        if(mysqli_query($conn,$sql)){
            
            header("location:movies.php");
        }   
        else{
            
            header("location:movies.php");
        }
    }

?>