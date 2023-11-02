<?php
   include "db/db.php";
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
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="logo">Educa.</a>

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
         <img src="<?php echo $profilepic; ?>" class="image" alt="">
         <h2 class="name">Welcome ,<?php echo $name;?></h2>
         <p class="role">student</p>
         <a href="profile.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="btn">view profile</a>
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
      <img src="<?php echo $profilepic; ?>" class="image" alt="">
      <h3 class="name"><?php echo $name; ?></h3>
      <p class="role">Student</p>
      <a href="profile.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="btn">View Profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="home-grid">

   <h1 class="heading">quick overview</h1>

   <div class="box-container">

      <!-- <div class="box">
         <h3 class="title">likes and comments</h3>
         <p class="likes">total likes : <span>25</span></p>
         <a href="#" class="inline-btn">view likes</a>
         <p class="likes">total comments : <span>12</span></p>
         <a href="#" class="inline-btn">view comments</a>
         <p class="likes">saved playlists : <span>4</span></p>
         <a href="#" class="inline-btn">view playlists</a>
      </div> -->

      <div class="box">
         <h3 class="title">top categories</h3>
         <div class="flex">
            <a href="#"><i class="fas fa-code"></i><span>development</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>marketing</span></a>
            <a href="#"><i class="fas fa-music"></i><span>music</span></a>
            <a href="#"><i class="fas fa-camera"></i><span>photography</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">popular topics</h3>
         <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#"><i class="fab fa-js"></i><span>javascript</span></a>
            <a href="#"><i class="fab fa-react"></i><span>react</span></a>
            <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">Our tutors</h3>
         <p class="tutor">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, nam?</p>
         <a href="teachers.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="inline-btn">Explore</a>
      </div>

   </div>

</section>



<section class="courses">

   <h1 class="heading">our courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete HTML tutorial</h3>
         <a href="./playlists/playlisthtml.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete CSS tutorial</h3>
         <a href="./playlists/playlistcss.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete JS tutorial</h3>
         <a href="./playlists/playlistjs.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Boostrap tutorial</h3>
         <a href="./playlists/playlistboots.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="inline-btn">view playlist</a>
      </div>
     

   </div>

   <div class="more-btn">
      <a href="courses.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>" class="inline-option-btn">view all courses</a>
   </div>

</section>















<footer class="footer">

   &copy; copyright @ 2022 by <span>BCOE Studentts</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>