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
            h1{
                text-align:center;
                color:red;
            }
            body{
                background-color:#F7E6AD;
            }
            video{
                align:center;
            }
        </style>
</head>
<body>
    <h1>Now Playing <br><?=$final_result['name']?></h1>
<video  height="85%" width="100%" controls>
<source src="<?=$final_result['movie_path']?>" type="video/mp4">
</video>
</body>
</html>

