<?php
include 'database_configuration.php';

$query = 'SELECT * from `movies_details`';
$query_result = mysqli_query( $conn, $query );
$i = 1;
?>
<?php
require_once 'admin.php';

?>
<div class='main_contaier'>
    <div class='container'>

        <table>
            <tr>
                <th>S No.</th>
                <th>Title</th>
                <th>Country</th>
                <th>Release</th>
                <th>Cast</th>
                <th>Description</th>
                <th>Poster</th>
                <th>Rent Price</th>
                <th>Buy Price</th>
                <th>Actions</th>

            </tr>
            <?php

while( $query_row = mysqli_fetch_assoc( $query_result ) ) 
 {

    ?>
            <tr>
                <td><?php echo $query_row['id']; ?></td>
                <td><?php echo $query_row[ 'name' ];
    ?></td>
                <td><?php echo $query_row[ 'country' ];
    ?></td>
                <td><?php echo $query_row[ 'release' ];
    ?></td>
                <td><?php echo $query_row[ 'cast' ];
    ?></td>
                <td><?php echo $query_row[ 'description' ];
    ?></td>
                <td><img src="<?php echo $query_row[ 'movie_thumbnail' ];
    ?>"></img></td>
                <td><?php echo $query_row[ 'rent_price' ];
    ?></td>
                <td><?php echo $query_row[ 'buy_price' ];
    ?></td>
                <td>
                    <form id="updateForm" action='update-movie.php' method='GET'>
                        <input type='number' style='display:none' value="<?=$query_row['id']?>" name='id'>
                        <input type="submit" onclick="document.getElementById('updateForm').submit();" class="primary_btn" value="Update">
                    </form>
                    <form  id="deleteForm"  action='delete-movie.php' method='POST'>
                        <input type='number' style='display:none' value="<?=$query_row['id']?>" name='id'>
                        <input type="submit" onclick="document.getElementById('updateForm').submit();" class="danger_btn" value="Delete">
 </form>
                </td>

            </tr>
            <?php
    $i++;

}

$conn->close();

?>
        </table>

    </div>
</div>