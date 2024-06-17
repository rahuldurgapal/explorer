<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include("../db_connection.php");

if(isset($_POST['signup']))
{

  $name = $_POST['full_name'];
  $email= $_POST['email'];
  $password = $_POST['password'];

  $new_name = mysqli_real_escape_string($con,$name);
  $new_email = mysqli_real_escape_string($con,$email);
  $new_password = mysqli_real_escape_string($con,$password);

  $number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

$s = "select student_email from students where student_email='$email'";

  if(empty($name))
{

    $warn = "Name filled is empty";
    
  header("location: ../../../signup?warn=$warn");
  // exit(0);
}

  else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $warn = "Email is not valid";
  header("Location: ../../../signup?warn=$warn");
  }

  else if(mysqli_num_rows(mysqli_query($con,$s))>=1)
  {
      $warn = "This email is already exsist";
    header("Location: ../../../signup?warn=$warn");
  }
 
else if((strlen($password) < 8) || !$number || !$uppercase || !$lowercase || !$specialChars) {
 $warn = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
 header("location: ../../../signup?warn=$warn");
}

else{


  $_SESSION['user_name']=$new_name;
  $_SESSION['user_email']=$new_email;
  $_SESSION['user_pass']=$new_password;
  
  $_SESSION['email_otp']=rand(100000,999999);
  header("location: ../../../signup/otpverify.php");


}

}
else 
 header("location: ../../../signup");






?>