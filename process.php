<?php 

$target_dir = "./images/";
$target_file = $target_dir . basename($_FILES["profile"]["name"]);

move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file);



?>