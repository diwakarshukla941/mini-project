<?php
include "db/db.php";

if (isset($_POST["submit"])) {
   $email = $_POST["email"];
   $password = $_POST["pass"]; 

   $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
   $result = mysqli_query($conn,$sql);

   if ($row = mysqli_fetch_assoc($result)) {
      echo "Login successful";
      header("Location: home.php");
      exit();
  } else {
      echo "Login failed!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>login</title>

      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

      <!-- custom css file link  -->
      <link rel="stylesheet" href="css/style.css">

   </head>
   <body>

      <header class="header"> 
         <section class="flex">

            <a href="home.php" class="logo">Educa.</a>

            <!-- <form action="search.php" method="post" class="search-form">
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
               <img src="images/pic-1.jpg" class="image" alt="">
               <h3 class="name">Karan Rathod</h3>
               <p class="role">student</p>
               <a href="profile.php" class="btn">view profile</a>
               <div class="flex-btn">
                  <a href="login.php" class="option-btn">login</a>
                  <a href="register.php" class="option-btn">register</a>
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
            <h3 class="name">Karan Rathod</h3>
            <p class="role">student</p>
            <a href="profile.php" class="btn">view profile</a>
         </div>

         <nav class="navbar">
            <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
            <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
            <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
            <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
            <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
         </nav>

      </div>

      <section class="form-container">

         <form method="post" >
            <h3>login now</h3>
            <p>your email <span>*</span></p>
            <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
            <p>your password <span>*</span></p>
            <input type="password" name="pass" placeholder="enter your password" required maxlength="20" class="box">
            <input type="submit" value="login new" name="submit" class="btn">
            <center><p class="signup" >I don't Have An Account!! <a href="register.php">Signup</a></p></center>
         </form>
      </section>

      <footer class="footer">
         &copy; copyright @ 2022 by <span>BCOE Students</span> | all rights reserved!
      </footer>

      <!-- custom js file link  -->
      <script src="js/script.js"></script>

      
   </body>
</html>