<?php
include "db/db.php";
if(isset($_POST['submit'])){
$target_dir = "./images/";
$target_file = $target_dir . basename($_FILES["profile"]["name"]);
   $name = $_POST["name"];
   $email = $_POST["email"];
   $password = $_POST["pass"];
// Check if the file was successfully uploaded
if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
echo "File uploaded successfully.<br>";

// Now, $target_file contains the file path.
$file_path = $target_file;
 
// Escape the file path to prevent SQL injection
$file_path = mysqli_real_escape_string($conn, $file_path);

// Insert the file path into the database

$sql = "INSERT INTO login (name,email,password,profilepic) VALUES ('$name','$email','$password','$file_path')";

if (mysqli_query($conn, $sql)) {
    echo "File path inserted into the database successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
} else {
echo "Error uploading the file.";
}

header("LOCATION:login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link rel="stylesheet" href="css/register.css">
</head>
<body>
   <section class="form-container">
      <form method="post" enctype="multipart/form-data">
         <h3>Register Now</h3>
         <p>Your Name <span>*</span></p>
         <input type="text" name="name" placeholder="Enter your name" maxlength="50" class="box" required>
         <p>Your Email <span>*</span></p>
         <input type="email" name="email" placeholder="Enter your email" maxlength="50" class="box" required>
         <p>Your Password <span>*</span></p>
         <input type="password" id="pass" name="pass" placeholder="Enter your password" maxlength="20" class="box" required>
         <p>Select Profile <span>*</span></p>
         <input type="file" accept="image/*" name="profile" class="box" required>
         <input type="submit" value="Register New" name="submit" class="btn">
      </form>
   </section>
</body>
</html>
