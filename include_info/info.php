<?php
   include "db/db.php";
   $name = isset($_GET['name']) ? $_GET['name'] : 'Guest';
   $email = isset($_GET['email']) ? $_GET['email'] : 'No email provided';
   $profilepic = isset($_GET['profilepic']) ? $_GET['profilepic'] : 'default.jpg';
   echo "Name: " . $name; // Debug output to check the name

?>