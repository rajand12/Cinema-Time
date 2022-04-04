<?php
include 'database_configuration.php';
$movie_id = $_GET["id"];
$query = "SELECT * from `movies_details` where `id`= $movie_id";
$query_result = mysqli_query( $conn, $query );
$final_result = mysqli_fetch_assoc( $query_result );
?>
<?php
require_once 'admin.php';
?>
<div class='main_container'>
    <div class='container'>
        <form action='' method='POST'>
            <input type="number" style="display:none" value="<?=$movie_id?>" name="newID">
            <table>
                <tr>

                    <th>Movie Name</th>
                    <td><input type='text' name='title' value="<?=$final_result['name']?>" required></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><input type='text' name='country' value="<?=$final_result['country']?>" required></td>
                </tr>
                <tr>
                    <th>Release</th>
                    <td><input type='date' name='release' value="<?=$final_result['release']?>" required></td>
                </tr>
                <tr>
                    <th>Cast</th>
                    <td><textarea name='cast' cols='30' rows='10' required><?= $final_result[ 'cast' ]?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><textarea name='description' cols='30' rows='10'
                            required><?= $final_result[ 'description' ]?></textarea></td>
                </tr>
                <tr>
                    <th>Rent Price</th>
                    <td><input type='number' name='rent_price' value="<?=$final_result['rent_price']?>" required></td>
                </tr>
                <tr>
                    <th>Buy Price</th>
                    <td><input type='number' name='buy_price' value="<?=$final_result['buy_price']?>" required></td>
                </tr>
                <tr>
                    <th>Submit</th>
                    <td><input type="submit" onclick="document.getElementById('updateForm2').submit();" class="primary_btn" value="Update"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
if ($_POST) {
    $new_id = $_REQUEST['newID'];
    $title = $_REQUEST[ 'title' ];
    $country = $_REQUEST[ 'country' ];
    $release = $_REQUEST[ 'release' ];
    $cast = $_REQUEST[ 'cast' ];
    $description = $_REQUEST[ 'description' ];
    $rent_price = $_REQUEST[ 'rent_price' ];
    $buy_price = $_REQUEST[ 'buy_price' ];
    $sql = "UPDATE `movies_details` SET `name`='$title',`country`='$country',`release`='$release',`cast`='$cast',`description`='$description',`rent_price`=$rent_price,`buy_price`=$buy_price
            WHERE `id`=$new_id;";
    if ( mysqli_query( $conn,$sql ) ) {
        
        header( 'location:movies.php' );
    } else {
        
        header( 'location:movies.php' );
    }
}
?>

