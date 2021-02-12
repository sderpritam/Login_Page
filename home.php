<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:login_&_register.php');
  }

 ?>
<html>
   <head>
     <title>Home Page</title>
     <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body class="hero">


     <div class="homepagetext">
            <a href="logout.php">Log Out</a>
        <marquee><h1>Welcome back <?php echo $_SESSION['username']; ?>.</h1></marquee>
     </div>
   </body>
 </html>
