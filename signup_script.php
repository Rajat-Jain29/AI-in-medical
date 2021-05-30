<?php

require("include/connection.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);


  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM patient WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $error_msg = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?email_error='.$error_msg);
  } else if (!preg_match($regex_email, $email)) {
    $error_msg = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?email_error='.$error_msg);
  }
    else {
    session_start();
    $query = "INSERT INTO patient(name, email, password)VALUES('" . $name . "','" . $email . "','" . $password . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['name'] = $name;
    header('location: report.php');
  }
?>