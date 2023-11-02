<?php
   include "../db/db.php";
   $name = isset($_GET['name']) ? $_GET['name'] : 'Guest';
   $email = isset($_GET['email']) ? $_GET['email'] : 'No email provided';
   $profilepic = isset($_GET['profilepic']) ? $_GET['profilepic'] : 'default.jpg';
   $select ="SELECT * FROM videos WHERE type='css'";
      $fetch = mysqli_query($conn,$select);
      $row = mysqli_fetch_assoc($fetch);
      $id = $row['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>video playlist</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="../home.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="logo">Educa.</a>

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
      <img src="../<?php echo $profilepic; ?>" class="image" alt="">
         <h3 class="name"><?php echo $name; ?></h3>
         <p class="role">Student</p>
         <a href="../profile.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="../login.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="option-btn">login</a>
            <a href="../register.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="../<?php echo $profilepic; ?>" class="image" alt="">
      <h3 class="name"><?php echo $name; ?></h3>
      <p class="role">Student</p>
      <a href="../profile.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="../home.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-home"></i><span>home</span></a>
      <a href="../about.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-question"></i><span>about</span></a>
      <a href="../courses.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="../teachers.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="../contact.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="playlist-details">

   <h1 class="heading">playlist details</h1>

   <div class="row">

      <div class="column">
        
   
         <div class="thumb">
            <img src="../images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
      </div>
      <div class="column">
         <div class="tutor">
            <img src="../images/pic-2.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
   
         <div class="details">
            <h3>complete CSS tutorial</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum minus reiciendis, error sunt veritatis exercitationem deserunt velit doloribus itaque voluptate.</p>
            <a href="../teacher_profile.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="inline-btn">view profile</a>
         </div>
      </div>
   </div>

</section>

<section class="playlist-videos">

   <h1 class="heading">playlist videos</h1>

   <div class="box-container">
   <?php
      $select ="SELECT * FROM videos WHERE type='css'";
      $fetch = mysqli_query($conn,$select);
      while($row = mysqli_fetch_assoc($fetch)){
      $id = $row['id'];
      $title = $row['title'];
   ?>
      <a class="box" href="../watch-video/css-wv/watch-video.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>">
         <i class="fas fa-play"></i>
         <img src="../images/thumb-2.png" alt="">
         <h3><?php echo $title; ?></h3>
      </a>
<?php
}
?>

   </div>

</section>













<footer class="footer">

   &copy; copyright @ 2022 by <span>BCOE Students</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

   
</body>
</html>