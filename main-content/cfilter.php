<?php
    include 'database_configuration.php';
    $country = $_POST['country'];
    $sql = "SELECT * from `movies_details` where country='$country'";
    $result = mysqli_query($conn,$sql);
    $countries = mysqli_num_rows($result);
    if($countries<=0){
        
    }
    else{
?> <div class="movies-box">
<?php
$i = 0;

$fetch_movies = "SELECT * from `movies_details` where country='$country'";
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
        <form method="GET" action="movie-display.php">
            <input type="number" style="display:none" value="<?=$row['id']?>" name="id">
                <button class='rent-buy'>Rent<span>
                <?=$row[ 'rent_price' ]?>
            </span></button>
        </form>
        <form method="GET" action="movie-display.php">
                        <input type="number" style="display:none" value="<?=$row['id']?>" name="id">
        <button class='rent-buy'>Buy<span>
                <?=$row[ 'buy_price' ]?>
            </span></button>
</form>
    </div>


<?php
}
}
}
?>

</div><?php

    }
?>
