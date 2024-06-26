<?php

include 'database_configuration.php';
?>
<?php 
require_once "admin.php";
?>
<div class='main_container'>

    <div class='container'>
        <div class='form'>
            <form action='' enctype="multipart/form-data" method="POST" >
                <label for='title'>Movie Name</label><br>
                <input type='text' name='title' required><br>
                <label for='country'>Country</label><br>
                <input type='text' name='country' required><br>
                <label for='release'>Release</label><br>
                <input type='date' name='release' required><br>
                <label for='cast'>Cast</label><br>
                <textarea name="cast" cols="30" rows="10" required></textarea><br>
                <label for='description'>Description</label><br>
                <textarea name="description" cols="30" rows="10" required></textarea><br>
                <label for='poster'>Poster</label><br>
                <input type='file' name='poster' ><br>
                <label for='movie'>Movie</label><br>
                <input type='file' name='movie' accept="video/*"><br>
                <label for='rent-price'>Rent Price</label><br>
                <input type='number' name='rent-price' required><br>
                <label for='buy-price'>Buy Price</label><br>
                <input type='number' name='buy-price' required><br>
                <input type='submit' value='Add Movie' class="primary_btn">
            </form>
            
        </div>

    </div>

</div>
<?php
        if($_POST){
            $name = $_REQUEST['title'];
            $country = $_REQUEST['country'];
            $release = $_REQUEST['release'];
            $cast = $_REQUEST['cast'];
            $description = $_REQUEST['description'];
            $poster = $_FILES['poster'];
            $movie = $_FILES['movie'];
            $rent_price = $_REQUEST['rent-price'];
            $buy_price = $_REQUEST['buy-price'];
            // file
            // poster
            $pname = $poster['name'];
            $ptmp_name = $poster['tmp_name'];
            $perror = $poster['error'];
            if($perror == 0 ){
                $pdestfolder = '../Posters/'.$pname;
                
               if( move_uploaded_file($ptmp_name,$pdestfolder)){
                // echo"Poster uploaded";
            //    }else{
            //        echo"Poster not uploaded";
               }
            }   
            // movie
            $mname = $movie['name'];
            $mtmp_name = $movie['tmp_name'];
            $merror = $movie['error'];
            if($merror == 0 ){
                $mdestfolder = '../Movies/'.$mname;
                
               if( move_uploaded_file($mtmp_name,$mdestfolder)){
            //     echo"Video uploaded";
            //    }else{
            //        echo"Video not uploaded";
               }
            }
            $query = "INSERT into `movies_details` (`name`,`country`,`release`,`cast`,`description`,`movie_thumbnail`,`movie_path`,`rent_price`,`buy_price`) 
                    VALUES ('$name','$country','$release','$cast','$description','$pdestfolder','$mdestfolder',$rent_price,$buy_price)";
                    // echo "$query";
            if(mysqli_query($conn,$query)){
                echo'<script>alert("Movie added successfully")</script>';
            }
            else{
                echo'<script>alert("Couldn`t add movie")</script>';
            }
        }

?>