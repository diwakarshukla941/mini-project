<?php
      include "./include_info/info.php";
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- Link to a dark mode CSS file (adjust this link to your CSS file) -->
   <link rel="stylesheet" href="css/login.css">

</head>
<body>

   <section class="form-container">
      <form method="post" action="process.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&profilepic=<?php echo $profilepic; ?>">
         <h3>Login Now</h3>
         <p>Your Email <span>*</span></p>
         <input type="email" name="email" placeholder="Enter your email" required maxlength="50" class="box">
         <p>Your Password <span>*</span></p>
         <input type="password" name="pass" placeholder="Enter your password" required maxlength="20" class="box">
         <input type="submit" value="Login" name="submit" class="btn">
         <center><p class="signup">Don't Have An Account? <a href="register.php">Signup</a></p></center>
      </form>
   </section>

   <!-- Remove the footer section here -->

</body>
</html>
