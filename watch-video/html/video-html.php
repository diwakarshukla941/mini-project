<?php
   include "../../db/db.php";
   $name = isset($_GET['name']) ? $_GET['name'] : 'Guest';
   $email = isset($_GET['email']) ? $_GET['email'] : 'No email provided';
   $profilepic = isset($_GET['profilepic']) ? $_GET['profilepic'] : 'default.jpg';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>watch</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="../../home.php" class="logo">Educa.</a>

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
         <img src="../../<?php echo $profilepic; ?>" class="image" alt="">
         <h3 class="name"><?php echo $name; ?></h3>
         <p class="role">student</p>
         <a href="../../profile.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="../../login.php" class="option-btn">login</a>
            <a href="../../register.php" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="../../<?php echo $profilepic; ?>" class="image" alt="">
      <h3 class="name"><?php echo $name; ?></h3>
      <p class="role">student</p>
      <a href="../../profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="../../home.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="../../about.php"><i class="fas fa-question"></i><span>about</span></a>
      <a href="../../courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="../../teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="../../contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="watch-video">
   <?php
      $vid = $_GET['id']; 
     $SELECT = "SELECT * FROM videos WHERE id = '$vid'";
     $connect = mysqli_query($conn,$SELECT);
     $row = mysqli_fetch_assoc($connect);
     $video = $row['video_path'];
     $title = $row['title']; 
   ?>
   <div class="video-container">
      <div class="video">
         <video src="../../uploadvideo/<?php echo $video; ?>" controls poster="../../images/post-1-1.png" id="video"></video>
      </div>
      <h3 class="title"><?php echo $title; ?></h3>
      <div class="info">
         <p class="date"><i class="fas fa-calendar"></i><span>22-10-2022</span></p>
         <!-- <p class="date"><i class="fas fa-heart"></i><span>44 likes</span></p> -->
      </div>
      <div class="tutor">
         <img src="../../images/pic-2.jpg" alt="">
         <div>
            <h3>john deo</h3>
            <span>developer</span>
         </div>
      </div>
      <!-- <form action="" method="post" class="flex">
         <a href="playlist.php" class="inline-btn">view playlist</a>
         <a href="./courses/BCOE MU.txt" download="./courses/BCOE MU.txt" >
            <button><i class="far fa-heart"></i><span>Download Notes</button>
         </a>
         
      </form> -->
      <p class="description">
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque labore ratione, hic exercitationem mollitia obcaecati culpa dolor placeat provident porro.
         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid iure autem non fugit sint. A, sequi rerum architecto dolor fugiat illo, iure velit nihil laboriosam cupiditate voluptatum facere cumque nemo!
      </p>
   </div>

</section>







<footer class="footer">

   &copy; copyright @ 2022 by <span>BCOE Students</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="../../js/script.js"></script>
   
</body>
</html>