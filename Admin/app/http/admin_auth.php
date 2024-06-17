<?php
session_start();
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 include("../db_connection.php");
 if(isset($_POST['login']))
 {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //to prevent from mysqli injection
    
    $new_username = mysqli_real_escape_string($con, $username);
    $new_password = mysqli_real_escape_string($con, $password);

    
    //match tha data from database
   

    $sql = "select * from admin where admin_username = '$new_username' and admin_password = '$new_password'";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);

    $sql1 = "select * from admin where admin_email = '$new_username' and admin_password = '$new_password'";
    $result1 = mysqli_query($con,$sql1);
    $count1 = mysqli_num_rows($result1);


    
    if($count>0)
    {
        $user=mysqli_fetch_assoc($result);
        $_SESSION['user']=$user['admin_id'];
        $_SESSION['username'] = $user['admin_username'];
        header("location: ../../Panel/");
    }
    else if($count1>0)
    {
        $user=mysqli_fetch_assoc($result1);
        $_SESSION['user']=$user['admin_id'];
        $_SESSION['username'] = $user['admin_username'];
        header("location: ../../Panel/");
    }
    else{
        $warn = "Your @username or @email or password is invalid!";
        header("Location: ../../index.php?warn=$warn");
    }
 } 
 else{
    header("Location: ../../");
 }


?>
