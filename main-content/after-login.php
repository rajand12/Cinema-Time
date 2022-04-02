<?php

session_start();
if ( $_SESSION[ 'user-logged-in' ] == false ) {
    header( 'location:login.php' );
}
require_once 'database_configuration.php';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Cinema Time</title>
    <link rel='shortcut icon' href='favicon.png' type='image/x-icon'>
    <link rel='stylesheet' href='../CSS/after-login.css'>

</head>

<body>
    <div id="title"></div>
    <nav class='navbar'>
        <img src='text-logo.png' alt=''>
        <div class='dropdown-list'>
            <label for="genre">Genre</label>
                    <select name="genre" id="genre">
                    <option value="Genre" selected disabled>Select Genre</option>
                    <?php
$sql2 = 'SELECT DISTINCT `name` from genre';
$result2 = mysqli_query( $conn, $sql2 );
while ( $genres = mysqli_fetch_assoc( $result2 ) ) {
    ?>
                        <option value="<?php echo$genres[ 'name' ] ?>"><?php echo$genres[ 'name' ] ?></option>
                        <?php
}
?>
                    </select>
                        

                    
                    <label for="country">Country</label>
                    <select name="country" id="country">
                    <option value="Country" selected disabled>Select Country</option>
                        <?php
$sql = 'SELECT DISTINCT country from movies_details';
$result = mysqli_query( $conn, $sql );
while ( $countries = mysqli_fetch_assoc( $result ) ) {
    ?>
                        <option value="<?php echo$countries[ 'country' ] ?>"><?php echo$countries[ 'country' ] ?></option>
                        <?php
}
?>
</div>
        <div class='search-bar'>
            <form action='' method='POST'>
                <input type='text' placeholder='Search.....' id="search-value">
                <input type='button' value='Search' id="search">
            </form>
        </div>
        <div class='user-info'>
            <ul>
                <li><a>
                        <?=$_SESSION['full_name']?>
                    </a>
                    <ul>
                        <li><a>My Movies</a></li>
                        <li><a href="customer-logout.php">Logout</a></li>
                        <ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="movies-box">
            <?php
$i = 0;

$fetch_movies = 'SELECT * from movies_details';
$result = $conn->query( $fetch_movies );
$num_movies = mysqli_num_rows($result);
if ( $result->num_rows>0 ) {
    while( $row = $result->fetch_assoc() ) {
        if ( $i<$num_movies) {
            $i++;
            ?>
                <div class='movies'>
                    <img class='movie_poster' src="<?=$row['movie_thumbnail']?>" alt="<?=$row['name']?>">
                    <p class='title'>Title: <?=$row[ 'name' ]?>
                    </p>
                    <p class='country'>Country: <?=$row[ 'country' ]?>
                    </p>
                    <p class='release'>Release: <?=$row[ 'release' ]?>
                    </p>
                    <p class='cast'>Cast: <?=$row[ 'cast' ]?>
                    </p>
                    <p class='description'>Description: <?=$row[ 'description' ]?>
                    </p>
                    <button class='rent-buy'>Rent<span>
                            <?=$row[ 'rent_price' ]?>
                        </span></button>
                    <button class='rent-buy'>Buy<span>
                            <?=$row[ 'buy_price' ]?>
                        </span></button>
                </div>
     

            <?php
        }
    }
}
?>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(()=>{
        var selectedItem = document.getElementById("genre");
            selectedItem.onchange = function() {
            var selectedOption = this.options[this.selectedIndex].value;
            console.log(selectedOption );
            $.post('filter.php',{
                genre: selectedOption
            },(info)=>{
                $('.movies-box').html(info);
            })
        }
        var cselectedItem = document.getElementById("country");
            cselectedItem.onchange = function() {
            var cselectedOption = this.options[this.selectedIndex].value;
            $.post('cfilter.php',{
                country: cselectedOption
            },(info)=>{
                $('.movies-box').html(info);
            })
        }
        $('#search').click(()=>{
            var search_value = $('#search-value').val();
            console.log(search_value);
            $.post('search-page.php',{
                search: search_value
            },(info)=>{
                $('.movies-box').html(info);
            })

        })
        
    })
    </script>
</body>

</html>