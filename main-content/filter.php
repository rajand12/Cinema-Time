<?php
    include 'database_configuration.php';
    $genre = $_POST['genre'];
    $sql = "SELECT * from `movies_details` inner join `genre` on movies_details.id = genre.movie_id where genre.name='$genre'";
    $result = mysqli_query($conn,$sql);
    $genres = mysqli_num_rows($result);
    if($genres<=0){
        
    }
    else{
?> <div class="movies-box">
<?php
$i = 0;

$fetch_movies = $sql = "SELECT * from `movies_details` inner join `genre` on movies_details.id = genre.movie_id where genre.name='$genre'";
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

</div><?php

    }
?>
