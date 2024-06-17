<?php

error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 include("../../db_connection.php");
 
 if(isset($_GET['id']))
 {
    $id=$_GET['id'];
    $sql1 = "select notes_link from notes where notes_id=$id";
    $q1=mysqli_query($con,$sql1);
    $res = mysqli_fetch_assoc($q1);
    $file = "../../../Panel/Notes/" . $res['notes_link'];
    $sql = "delete from notes where notes_id = $id";
    $q= mysqli_query($con,$sql);
    if($q && unlink($file))
     header("location: ../../../Panel/notes.php");
    else
     echo "operation failed";
 }
 else
  header("location: ../../../Panel/notes.php");



?>