<?php
  session_start();
  $con = mysqli_connect('localhost', 'root', '');

  mysqli_select_db($con, 'userregistration');

  $uname = $_POST['username'];
  $pass = $_POST['password'];

  $s = "select * from usertable where username = '$uname' && password='$pass'";

  $result = mysqli_query($con, $s);

  $num = mysqli_num_rows($result);

  if($num == 1){
    $_SESSION['username'] = $uname;
    header('location:home.php');
  }else{
    header('location:login_&_register.php');
  }

 ?>
