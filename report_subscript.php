<?php

require("include/connection.php");
session_start();
$user_id = $_SESSION['user_id'];
  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $pregnancies = $_POST['pregnancies'];
  $pregnancies = mysqli_real_escape_string($con, $pregnancies);

  $Glucose = $_POST['Glucose'];
  $Glucose = mysqli_real_escape_string($con, $Glucose);

  $Blood_pressure = $_POST['Blood_pressure'];
  $Blood_pressure = mysqli_real_escape_string($con, $Blood_pressure);
  
  $Skin_Thickness = $_POST['Skin_Thickness'];
  $Skin_Thickness = mysqli_real_escape_string($con, $Skin_Thickness);
  
  $Insulin = $_POST['Insulin'];
  $Insulin = mysqli_real_escape_string($con, $Insulin);

  $BMI = $_POST['BMI'];
  $BMI = mysqli_real_escape_string($con, $BMI);
  
  $diabetes_pedigree_function = $_POST['diabetes_pedigree_function'];
  $diabetes_pedigree_function = mysqli_real_escape_string($con, $diabetes_pedigree_function);
  
  $Age = $_POST['Age'];
  $Age = mysqli_real_escape_string($con, $Age);
  
  
    $query = "INSERT INTO report (patient_id, pregnancies, glucose, blood_pressure, skin_thickness, insulin, BMI, diabetes_pedigree_function, age )VALUES('" . $user_id . "', '" . $pregnancies . "','" . $Glucose . "','" . $Blood_pressure . "', '" . $Skin_Thickness . "', '" . $Insulin . "', '" . $BMI . "', '" . $diabetes_pedigree_function . "', '" . $Age . "' )";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $_SESSION['preg'] = $pregnancies;
    $_SESSION['glu'] = $Glucose;
    $_SESSION['bp'] = $Blood_pressure;
    $_SESSION['st'] = $Skin_Thickness;
    $_SESSION['ins'] = $Insulin;
    $_SESSION['bmi'] = $BMI;
    $_SESSION['dpf'] = $diabetes_pedigree_function;
    $_SESSION['age'] = $Age;
    header('location: result.php');
  
?>