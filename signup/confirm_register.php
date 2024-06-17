<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include("../Admin/app/db_connection.php");
if(isset($_SESSION['done'])){

     $new_name = $_SESSION['user_name'];
     $new_email = $_SESSION['user_email'];
     $new_password = $_SESSION['user_pass'];

     $sql = "insert into students(student_name, student_email, student_password) values ('$new_name', '$new_email', '$new_password')";
    $query = mysqli_query($con,$sql);
    if($query){

   header("location: ../login/index.php?success=Your data are sucessfully registered");

    session_unset();
    session_destroy();
    }
    else 
     echo "something wrong in the query";
}
else
 header("location: index.php");

?>