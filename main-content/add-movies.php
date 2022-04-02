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
                <input type='file' name='movie' accept="video/*"><br> -->
                <label for='rent-price'>Rent Price</label><br> -->
                <input type='number' name='rent-price' required><br>
                <label for='buy-price'>Buy Price</label><br>
                <input type='number' name='buy-price' required><br>
                <input type='submit' value='Add Movie'>
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

            if($perror == 0){
                $pdistfolder = 'uploadedfile/'.$pname;
                if(move_uploaded_file($ptmp_name,$distfolder)){

                }
            }

        }   

?>