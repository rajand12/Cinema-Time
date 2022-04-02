<?php   
    include "database_configuration.php";
    if($_GET){
        $id = $_REQUEST['id'];
        $query = "SELECT * FROM `movies_details` where `id`='$id'";
        $result = mysqli_query($conn,$query);
        $final_result = mysqli_fetch_assoc($result);
        
    }

?>
<html>
    <head>
        <title><?=$final_result['name']?></title>
        <style>
        </style>
</head>
<body>
<video  height="400px" width="600px" controls>
<source src="<?=$final_result['movie_path']?>" type="video/mp4">
</video>
</body>
</html>

