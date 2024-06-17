<?php

session_start();
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 include("../db_connection.php");

if(isset($_POST['user_login']))
{
   $email = $_POST['user_email'];
   $pass = $_POST['user_password'];

    //to prevent from mysqli injection
    
    $new_email = mysqli_real_escape_string($con, $email);
    $new_pass = mysqli_real_escape_string($con, $pass);

       //match tha data from database
   
   
       $sql = "select * from students where student_email = '$new_email' and student_password = '$new_pass'";
       $result = mysqli_query($con,$sql);
       $count = mysqli_num_rows($result);
   
   
       
       if($count>0)
       {
           $user=mysqli_fetch_assoc($result);
           $_SESSION['std_name']=$user['student_name'];
           $_SESSION['std_email'] = $user['student_email'];
           header("location: ../../../index.php");
       }
     
       else{
           $warn = "Your @username or @email or password is invalid!";
           header("Location: ../../../login?warn=$warn");
       }
    
}
else 
 header("location: ../../../login");

?>