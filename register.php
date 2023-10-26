<?php
include "db/db.php";
include "include_info/info.php";
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
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php" class="logo">Educa.</a>

      <!-- <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form> -->

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/local.png" class="image" alt="">
         <h3 class="name">Karan rathod</h3>
         <p class="role">student</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">Karan rathod</h3>
      <p class="role">student</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="form-container">

   <form method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <p>your name <span>*</span></p>
      <input type="text" name="name" placeholder="enter your name"  maxlength="50" class="box" required>
      <p>your email <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email"  maxlength="50" class="box" required>
      <p>your password <span>*</span></p>
      <input type="password" id="pass" name="pass" placeholder="enter your password" maxlength="20" class="box" required>
      <p>select profile <span>*</span></p>
      <input type="file" accept="image/*" name="profile"  class="box" required>
      <input type="submit" value="register new" name="submit" class="btn" >
   </form>

</section>

<footer class="footer">

   &copy; copyright @ 2022 by <span>BCOE Students</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js">
</script>

   
</body>
</html>