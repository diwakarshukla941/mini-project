<?php
include "db/db.php";

if (isset($_POST["submit"])) { 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    header("Location: home.php?name={$row['name']}&email={$row['email']}&profilepic={$row['profilepic']}");
} else {
    echo "Invalid email or password. Please try again.";
    
}
   
}
?>
