<?php
    include "database_configuration.php";
    
    $query = "SELECT * from `movies_details`";
    $query_result = mysqli_query($conn,$query);
    $i=1;
?>
<?php
require_once "admin.php";
?>
<div class="main_contaier">
<div class="container">
    
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



</tr>
<?php

while( $query_row = mysqli_fetch_array($query_result) ) 
 {

    ?>
    <tr>
    <td><?php echo $i ?></td>
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
    
    
    </tr>
    <?php
    $i++;

}

$conn->close();

?>
</table>

</div>
</div>