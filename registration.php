<?php
  session_start();
  header('location:login_&_register.php');
  $con = mysqli_connect('localhost', 'root', '');

  mysqli_select_db($con, 'userregistration');

  $uname = $_POST['username'];
  $useremail = $_POST['email'];
  $pass = $_POST['password'];

  $s = "select * from usertable where username = '$uname'";

  $result = mysqli_query($con, $s);

  $num = mysqli_num_rows($result);

  if($num == 1){
    echo "Username Already Taken";
  }else{
    $reg= "insert into usertable(username, email, password) values('$uname', '$useremail', '$pass')";
    mysqli_query($con,$reg);
    echo "Registration successful";
  }

 ?>
