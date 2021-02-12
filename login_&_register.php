<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login and SignUp Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="hero">
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" name="button" class="toggle-btn" onclick="login()">Log In</button>
          <button type="button" name="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <div class="social-icons">
          <img src="fb.png" alt="">
          <img src="insta.png" alt="">
          <img src="li.png" alt="">
          <img src="wa.png" alt="">
        </div>
        <form class="input-group" id="login" action="validation.php" method="post">
          <input type="text" name="username" value="" class="input-field" placeholder="User name" required>
          <input type="text" name="password" value="" class="input-field" placeholder="Enter Password" required>
          <input type="checkbox" name="chbx" value="" class="check-box" required><span>Remember Password </span>
          <button type="submit" name="button" class="submit-btn">Log in</button>
        </form>
        <form class="input-group" id="register" action="registration.php" method="post">
          <input type="text" name="username" value="" class="input-field" placeholder="User name" required>
          <input type="email" name="email" value="" class="input-field" placeholder="Email Id" required>
          <input type="password" name="password" value="" class="input-field" placeholder="Enter Password" required>
          <input type="checkbox" name="chbx" value="" class="check-box" required><span>I agree to the terms & conditions </span>
          <button type="submit" name="button" class="submit-btn">Register</button>
        </form>
      </div>
    </div>


<script type="text/javascript">
  var x= document.getElementById('login');
  var y= document.getElementById('register');
  var z= document.getElementById('btn');

  function register(){
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
  }
  function login(){
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
  }

</script>

  </body>

</html>
