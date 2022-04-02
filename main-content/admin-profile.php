<?php
    include "database_configuration.php"
?>
<div class="main_container">
        <?php require_once 'admin.php';?>
        <div class="container">
            <div class="info">
                    <b>Username : </b>
                    <?= $_SESSION['admin_full_name']; ?><br>
                    <b>E-mail : </b>
                    <?= $_SESSION['admin_email']; ?><br>
                <b>Role:</b>  Admin
            </div>
            
        </div>
    </div>