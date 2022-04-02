<?php
    include "database_configuration.php";
    
    $query = "SELECT * from `user_details`";
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
<th>Username</th>
<th>Email</th>
<th>Is Admin</th>

</tr>
<?php

while( $query_row = mysqli_fetch_array($query_result) ) 
 {

    ?>
    <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $query_row[ 'full_name' ];
    ?></td>
    <td><?php echo $query_row[ 'email' ];
    ?></td>
    <td><?php if ( $query_row[ 'is_admin' ]==1 ) {
        echo 'True';
    } else {
        echo 'False';
    }
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